<?php

namespace EJ\LoveBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Request;
use EJ\LoveBundle\Entity\Card;
use EJ\LoveBundle\Entity\Game;

class GameController extends Controller
{
    public function toindexAction()
    {
        return $this->redirectToRoute('LoveBundle_home');
    }

    public function indexAction()
    {
        return $this->render('EJLoveBundle:Default:index.html.twig');
    }

    public function initAction()
    {
        $connection = $this->getDoctrine()->getManager()->getConnection();
        $db = $connection->getDatabasePlatform();
        $connection->executeUpdate("SET foreign_key_checks = 0;");
        $connection->executeUpdate($db->getTruncateTableSQL('game_card', true /* whether to cascade */));
        $connection->executeUpdate($db->getTruncateTableSQL('card', true /* whether to cascade */));
        $connection->executeUpdate($db->getTruncateTableSQL('game', true /* whether to cascade */));
        $connection->executeUpdate($db->getTruncateTableSQL('party', true /* whether to cascade */));
        $connection->executeUpdate("SET foreign_key_checks = 1;");
        $this->createCards();
        return $this->redirectToRoute('LoveBundle_admin');
    }

    public function createAction($gameid)
    {
        $game = $this->createGame($gameid);
        return $this->redirectToRoute('LoveBundle_view',array( 'gameid' => $game->getId() ));
    }

    public function resetAction($gameid)
    {
        $game = $this->resetGame($gameid);
        return $this->redirectToRoute('LoveBundle_view',array( 'gameid' => $game->getId() ));
    }

    public function viewAction($gameid)
    {
        // On récupère l'entité correspondante à l'id $gameid
        $repository = $this->getDoctrine()
            ->getManager()
            ->getRepository('EJLoveBundle:Game');
         $game = $repository->find($gameid);

        // $gameid est donc une instance de notre jeu
        // ou null si l'id $gameid  n'existe pas, d'où ce if :
        if (null === $game || $gameid < 1) {
            throw new NotFoundHttpException('La partie assignée a l\'ID "' . $gameid . '" est inexistant.');
        }

        if ($game->getParty()->getIsOver()) {
            return $this->redirectToRoute('LoveBundle_viewParty',array( 'partyid' => $game->getId() ));
        }

        // Le render ne change pas, on passait avant un tableau, maintenant un objet
        return $this->render('EJLoveBundle:Default:view.html.twig', array(
            'game' => $game
        ));
    }

    public function playcardAction($gameid,$playerid,$cardid)
    {
        $em = $this->getDoctrine()->getManager();
        // On récupère l'entité correspondante à l'id $gameid
        $repository = $this->getDoctrine()
            ->getManager()
            ->getRepository('EJLoveBundle:Game');
        $game = $repository->find($gameid);

        $request = Request::createFromGlobals();
        $a = $request->request->all();


        //vérifie que le joueur lancant l'action correspond bien au joueur ayant la main
        if ($this->getUser()->getUsername() != $game->getPlayerNameTurn() ){
            $this->addFlash('information','Vous ne pouvez pas jouer, ce n\'est pas votre tour.');
            return $this->redirectToRoute('LoveBundle_view',array( 'gameid' => $game->getId() ));
        }
        //vérifie que le joueur jouant la carte est bien le propriétaire de la carte
        if ($playerid != $game->getPlayerNameTurn() ){
            $this->addFlash('information','Vous ne pouvez pas jouer une carte de votre adversaire.');
            return $this->redirectToRoute('LoveBundle_view',array( 'gameid' => $game->getId() ));
        }
        //vérifie que le joueur jouant la carte est sous l'effet de la comptesse
        if ($cardid != 14){
            if ($game->isCountessActive($playerid)){
                $this->addFlash('information','Vous devez jouer la Comptesse.');
                return $this->redirectToRoute('LoveBundle_view',array( 'gameid' => $game->getId() ));
            }
        }
        //Action
        //control vérifie si l'operation est autorisée (évite d'ajouter au board des cartes qui ne sont pas en main)
        $control = $game->removeCardInHand($playerid,intval($cardid));
        if ($control){
            $game->addPlayedCard($playerid,intval($cardid));
            //application de l'effet de la carte selon son id 
            if ($cardid >=0 and $cardid<=4){ // guard
                $result = $game->guardEffect($_POST['playerName'],$_POST['cardName']);
                if ($result){
                    $this->addFlash('hint',$playerid . ' à réussi à éliminer ' . $_POST['playerName'] . ' en devinant sa carte ('. $_POST['cardName'] .').');
                }else{
                    $this->addFlash('hint',$playerid . ' à échoué à éliminer ' . $_POST['playerName'] . ' en devinant sa carte ('. $_POST['cardName'] .').');
                }
            }
            if ($cardid == 5 or $cardid == 6){ // priest
                $playershand = $game->getCardsInHand();
                $targethand = $playershand[$_POST['playerName']];
                $cardvalue = $targethand[0];
                $cards = $game->getCards();
                $card = $cards[$cardvalue];
                $cardname = $card->getNomCarte();
                var_dump($cardname);
                $this->addFlash('hint','Vous regardez la main de '.$_POST['playerName'].' : Il possède un '.$cardname.'.');
            }
            if ($cardid == 7 or $cardid == 8){ // baron 
                $result = $game->baronEffect($playerid, $_POST['playerName']);
                if ($result == $playerid){
                    $this->addFlash('hint',$playerid . ' à réussi à éliminer ' . $_POST['playerName'] . ' avec un Baron.');
                }else if ($result == $_POST['playerName']){
                    $this->addFlash('hint',$playerid . ' s\'est éliminé contre  ' . $_POST['playerName'] . ' avec un Baron.');
                }else{
                    $this->addFlash('hint',$playerid . 'à fait une égalité contre  ' . $_POST['playerName'] . ' avec un Baron.');
                }
            }
            if ($cardid == 9 or $cardid == 10){ // handmaid
                $game->handmaidEffect($playerid);
                $this->addFlash('hint','Vous êtes maintenant protégé jusqu\'au prochain tour.');
            }           
            if ($cardid == 11 or $cardid == 12){ // prince
                $game->princeEffect($_POST['playerName']);
                $this->addFlash('hint',$playerid . ' à fais défausser puis piocher ' . $_POST['playerName'].'.');
            }
            if ($cardid == 13){ // king
                $game->kingEffect($playerid,$_POST['playerName']);
                $this->addFlash('hint',$playerid . ' à échangé sa main avec ' . $_POST['playerName'] .'.');
            }
            if ($cardid == 15){ //princess
                $game->princessEffect($playerid);
                $this->addFlash('hint',$playerid . ' s\'est éliminé en jouant la Princesse.');
            }
            //si la partie est finie on avance dans la manche suivante
            if ($game->isGameOver()){
                $game->addPlayerScore($game->getWinner());
                $this->resetGame($game);
            }else{
                //avance dans la boucle de jeu et fais piocher le joueur suivant
                $game->advanceTurn();
                $game->addCardInHand($game->getPlayerNameTurn(),$game->drawCard());
            }
        }else{
            $this->addFlash('information','Vous ne pouvez pas jouer une carte que vous ne possedez pas.');
        }

        $em->persist($game);
        $em->flush();
        return $this->redirectToRoute('LoveBundle_view',array( 'gameid' => $game->getId() ));
    }

    public function leaveAction($gameid,$playerid)
    {
        $em = $this->getDoctrine()->getManager();
        // On récupère l'entité correspondante à l'id $gameid
        $repository = $this->getDoctrine()
            ->getManager()
            ->getRepository('EJLoveBundle:Game');
        $game = $repository->find($gameid);
        $game->getParty()->setHardPlayerScore($playerid,0);
        $game->removePlayer($playerid);
        if (count($game->getPlayers()) == 1){
            $lastplayer = $game->getPlayers();
            $game->removePlayer($lastplayer[0]);
            $game->getParty()->setPartyOver();
            //$game->getParty()->setHardPlayerScore($lastplayer,7);
        }

        $em->persist($game);
        $em->flush();
        return $this->redirectToRoute('LoveBundle_view',array( 'gameid' => $game->getId() ));
    }

    public function getTourAction($gameid){
        // On récupère l'entité correspondante à l'id $gameid
        $repository = $this->getDoctrine()
            ->getManager()
            ->getRepository('EJLoveBundle:Game');
        $game = $repository->find($gameid);
        //on recup qui joue et on le renvoie en tant que json
        $tour = $game->getPlayerTurn();

        return $this->json(array($tour,$game->getParty()->getRoundNumber(),$game->getParty()->getIsOver()));
    }

    public function createGame($id){
        $em = $this->getDoctrine()->getManager();
        
        $partyrepesitory = $this->getDoctrine()
            ->getManager()
            ->getRepository('EJLoveBundle:Party');
        
        $party = $partyrepesitory->find($id);
        $party->setPartyStarted();
        $game = new Game();
        $cardrepository = $this->getDoctrine()
            ->getManager()
            ->getRepository('EJLoveBundle:Card');

        $game->setId($id);
        $game->setParty($party);
        //remplis le jeu des 16 cartes de loveletter
        $cardlist = $cardrepository->findAll();
        foreach ($cardlist as $card){
         $game->addCard($card);
        }
        //ajoute les joueurs au jeu
        $game->addPlayers($party->getPartyPlayersName());
        //On suit les regles du jeu : mettre les 16 Cartes dans la pioche
        $game->createDeck();
        //On retire la premiere carte du deck du jeu
        $secretCard = $game->drawCard();
        $game->setCardHidden($secretCard);
        $game->addDiscardedCard($secretCard);
        //On retire les 3 premières cartes du jeu car on joue a 2
        if (count($game->getPlayers()) == 2){
            $game->addDiscardedCard($game->drawCard());
            $game->addDiscardedCard($game->drawCard());
            $game->addDiscardedCard($game->drawCard());
        }
        //on fais piocher tout les joueurs +1 pour l'host qui commence
        $game->addCardInHand($game->getPlayerNameTurn(),$game->drawCard());
        foreach ($game->getPlayers() as $player){
            $game->addCardInHand($player,$game->drawCard());
        }

        $em->persist($game);
        $metadata = $em->getClassMetaData(get_class($game));
        $metadata->setIdGeneratorType(\Doctrine\ORM\Mapping\ClassMetadata::GENERATOR_TYPE_NONE);
        $em->flush();

        return $game;
    }

    public function resetGame($gameid){
        $em = $this->getDoctrine()->getManager();
        // On récupère l'entité correspondante à l'id $gameid
        $repository = $this->getDoctrine()
            ->getManager()
            ->getRepository('EJLoveBundle:Game');
        $game = $repository->find($gameid);

        //On reinitialise les champs qui en ont besoin
        $game->resetGame();
        //On suit les regles du jeu : mettre les 16 Cartes dans la pioche
        $game->createDeck();
        //On retire la premiere carte du deck du jeu
        $secretCard = $game->drawCard();
        $game->setCardHidden($secretCard);
        $game->addDiscardedCard($secretCard);
        //On retire les 3 premières cartes du jeu car on joue a 2
        if (count($game->getPlayers()) == 2){
            $game->addDiscardedCard($game->drawCard());
            $game->addDiscardedCard($game->drawCard());
            $game->addDiscardedCard($game->drawCard());
        }
        //on fais piocher tout les joueurs +1 pour l'host qui commence
        $game->addCardInHand($game->getPlayerNameTurn(),$game->drawCard());
        foreach ($game->getPlayers() as $player){
            $game->addCardInHand($player,$game->drawCard());
        }

        $em->persist($game);
        $em->flush();

        return $game;
    }

    public function createCards(){ //cette methode crée les cartes statiques dans la base de donnée, elle ne doit être appellée qu'une fois pas base pour la populer.
        $em = $this->getDoctrine()->getManager();

        $c1 = new Card();
        $c1->setValue(0,"Guard","Name a non-Guard card and choose another player. If that player has that card he is out of the round","http://localhost/WebLoveLetter/web/images/guard.png");

        $c2 = new Card();
        $c2->setValue(1,"Guard","Name a non-Guard card and choose another player. If that player has that card he is out of the round","http://localhost/WebLoveLetter/web/images/guard.png");

        $c3 = new Card();
        $c3->setValue(2,"Guard","Name a non-Guard card and choose another player. If that player has that card he is out of the round","http://localhost/WebLoveLetter/web/images/guard.png");

        $c4 = new Card();
        $c4->setValue(3,"Guard","Name a non-Guard card and choose another player. If that player has that card he is out of the round","http://localhost/WebLoveLetter/web/images/guard.png");

        $c5 = new Card();
        $c5->setValue(4,"Guard","Name a non-Guard card and choose another player. If that player has that card he is out of the round","http://localhost/WebLoveLetter/web/images/guard.png");

        $c6 = new Card();
        $c6->setValue(5,"Priest","Look at another player's hand.","http://localhost/WebLoveLetter/web/images/priest.png");

        $c7 = new Card();
        $c7->setValue(6,"Priest","Look at another player's hand.","http://localhost/WebLoveLetter/web/images/priest.png");

        $c8 = new Card();
        $c8->setValue(7,"Baron","Compare your hand with another player's, the one with the lowest value is out of the round.","http://localhost/WebLoveLetter/web/images/baron.png");

        $c9 = new Card();
        $c9->setValue(8,"Baron","Compare your hand with another player's, the one with the lowest value is out of the round.","http://localhost/WebLoveLetter/web/images/baron.png");

        $c10 = new Card();
        $c10->setValue(9,"Handmaid","Until your next turn ignore all others player's card effect.","http://localhost/WebLoveLetter/web/images/handmaid.png");

        $c11 = new Card();
        $c11->setValue(10,"Handmaid","Until your next turn ignore all others player's card effect","http://localhost/WebLoveLetter/web/images/handmaid.png");

        $c12 = new Card();
        $c12->setValue(11,"Prince","Choose any player and discard his hand and draw a new card.","http://localhost/WebLoveLetter/web/images/prince.png");

        $c13 = new Card();
        $c13->setValue(12,"Prince","Choose any player and discard his hand and draw a new card.","http://localhost/WebLoveLetter/web/images/prince.png");

        $c14 = new Card();
        $c14->setValue(13,"King","Trade hands with the player of your choice.","http://localhost/WebLoveLetter/web/images/king.png");

        $c15 = new Card();
        $c15->setValue(14,"Countess","If you have this card and the King or the Prince in hand, you must discard this card","http://localhost/WebLoveLetter/web/images/countess.png");

        $c16 = new Card();
        $c16->setValue(15,"Princess","If you discard this gard, you are out of the round.","http://localhost/WebLoveLetter/web/images/princess.png");

        $c17 = new Card();
        $c17->setValue(16,"?","???","http://localhost/WebLoveLetter/web/images/verso.png");

        $em->persist($c1);
        $em->persist($c2);
        $em->persist($c3);
        $em->persist($c4);
        $em->persist($c5);
        $em->persist($c6);
        $em->persist($c7);
        $em->persist($c8);
        $em->persist($c9);
        $em->persist($c10);
        $em->persist($c11);
        $em->persist($c12);
        $em->persist($c13);
        $em->persist($c14);
        $em->persist($c15);
        $em->persist($c16);
        $em->persist($c17);
        $em->flush();
    }
             
}
