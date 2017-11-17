<?php

namespace EJ\LoveBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use EJ\LoveBundle\Entity\Card;
use EJ\LoveBundle\Entity\Game;
use EJ\LoveBundle\Entity\Party;

class PartyController extends Controller
{
     public function listAction(){
         //Verifie si on est connecté
         $user = $this->get('security.token_storage')->getToken()->getUser();
         if ($user == "anon.") {
             $this->addFlash('information','Vous devez être connecté pour accéder a cette page.');
             return $this->redirectToRoute('fos_user_security_login');
         }
        $repository = $this->getDoctrine()
            ->getManager()
            ->getRepository('EJLoveBundle:Party');
         
        $partyList = $repository->findall();
         
        return $this->render('EJLoveBundle:Default:listParty.html.twig', array( 'list' => $partyList));
    }
    
    
    public function createPartyAction(){
        //Verifie si on est connecté
        $user = $this->get('security.token_storage')->getToken()->getUser();
        if ($user == "anon.") {
            $this->addFlash('information','Vous devez être connecté pour accéder a cette page.');
            return $this->redirectToRoute('fos_user_security_login');
        }
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $party = new Party();
        $party->setHost($user);
        $party->addPlayer($user);
        $em->persist($party);
        $em->flush();
        return $this->redirectToRoute('LoveBundle_viewParty',array( 'partyid'=> $party->getId() ));
        //return $this->render('EJLoveBundle:Default:lobbyParty.html.twig', array( 'party' => $party));;
    }
    
    public function viewPartyAction($partyid){
        //Verifie si on est connecté
        $user = $this->get('security.token_storage')->getToken()->getUser();
        if ($user == "anon.") {
            $this->addFlash('information','Vous devez être connecté pour accéder a cette page.');
            return $this->redirectToRoute('fos_user_security_login');
        }
        // On récupère l'entité correspondante à l'id $gameid
        $repository = $this->getDoctrine()
            ->getManager()
            ->getRepository('EJLoveBundle:Party');
         $party = $repository->find($partyid);

        // $gameid est donc une instance de notre jeu
        // ou null si l'id $gameid  n'existe pas, d'où ce if :
        if (null === $partyid || $partyid < 1) {
            throw new NotFoundHttpException('La partie assignée a l\'ID "' . $partyid . '" est inexistant.');
        }

        // Le render ne change pas, on passait avant un tableau, maintenant un objet
        return $this->render('EJLoveBundle:Default:lobbyParty.html.twig', array(
            'party' => $party
        ));
        
    }
     
    public function joinPartyAction($partyid){
        //Verifie si on est connecté
        $user = $this->get('security.token_storage')->getToken()->getUser();
        if ($user == "anon.") {
            $this->addFlash('information','Vous devez être connecté pour accéder a cette page.');
            return $this->redirectToRoute('fos_user_security_login');
        }
        $em = $this->getDoctrine()->getManager();
        // On récupère l'entité correspondante à l'id $gameid
        $repository = $this->getDoctrine()
            ->getManager()
            ->getRepository('EJLoveBundle:Party');
        $party = $repository->find($partyid);
        $user = $this->getUser();
        $party->addPlayer($user);
        $em->flush();
        return $this->redirectToRoute('LoveBundle_viewParty',array( 'partyid'=> $party->getId() ));
    }
             
}
