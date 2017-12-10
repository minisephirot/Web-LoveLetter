<?php

namespace EJ\LoveBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Card
 *
 * @ORM\Table(name="game")
 * @ORM\Entity(repositoryClass="EJ\LoveBundle\Repository\GameRepository")
 */
class Game
{
    public function __construct()
    {
        $this->cards = new ArrayCollection();
        $this->playerTurn = 0;
    }

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", unique=true)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="EJ\LoveBundle\Entity\Party", cascade={"persist"})
     */
    private $party;

    /**
     * @ORM\ManyToMany(targetEntity="EJ\LoveBundle\Entity\Card", cascade={"persist"})
     */
    private $cards;

    /**
     * @var int
     *
     * @ORM\Column(name="cardHidden", type="integer", nullable=true)
     */
    private $cardHidden;

    /**
     * @var int
     *
     * @ORM\Column(name="playerTurn", type="integer", nullable=false)
     */
    private $playerTurn;

    /**
     * @var array
     *
     * @ORM\Column(name="playerStatus", type="array", nullable=true)
     */
    private $playerStatus;

    /**
     * @var array
     *
     * @ORM\Column(name="playerProtection", type="array", nullable=true)
     */
    private $playerProtection;

    /**
     * @var array
     *
     * @ORM\Column(name="cardsPlayed", type="array", nullable=true)
     */
    private $cardsPlayed;

    /**
     * @var array
     *
     * @ORM\Column(name="cardsInHand", type="array", nullable=true)
     */
    private $cardsInHand;

    /**
     * @var array
     *
     * @ORM\Column(name="cardsInDeck", type="array", nullable=true)
     */
    private $cardsInDeck;

    /**
     * @var array
     *
     * @ORM\Column(name="cardsDiscarded", type="array", nullable=true)
     */
    private $cardsDiscarded;

    /**
     * set id
     * @param int
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Add card
     *
     * @param \EJ\LoveBundle\Entity\Card $card
     *
     * @return Game
     */
    public function addCard(Card $card)
    {
        $this->cards[] = $card;

        return $this;
    }

    /**
     * Remove card
     *
     * @param \EJ\LoveBundle\Entity\Card $card
     */
    public function removeCard(Card $card)
    {
        $this->cards->removeElement($card);
    }

    /**
     * Get cards
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCards()
    {
        return $this->cards;
    }

    /**
     * Get card by it's ID
     * @param int $id
     * @return \EJ\LoveBundle\Entity\Card
     */
    public function getCard($id)
    {
        return $this->cards[$id];
    }

    /**
     * Add Players to every array which needs a player
     *
     * @param array $nomjoueurs
     *
     */
    public function addPlayers(array $nomjoueurs)
    {
        foreach ($nomjoueurs as $nomjoueur){
            $this->cardsPlayed[$nomjoueur] = null;
            $this->cardsInHand[$nomjoueur] = null ;
            $this->playerStatus[$nomjoueur] = 1;
            $this->playerProtection[$nomjoueur] = 0;
        }
    }

    /**
     * Add Player to every array which needs a player
     *
     * @param string $nomjoueur
     *
     */
    public function addPlayer($nomjoueur)
    {
        $this->cardsPlayed[$nomjoueur] = null;
        $this->cardsInHand[$nomjoueur] = null;
        $this->playerStatus[$nomjoueur] = 1;
        $this->playerProtection[$nomjoueur] = 0;
    }

    /**
     * Remove player
     *
     * @param user
     */
    public function removePlayer($player)
    {
        unset($this->cardsPlayed[$player]);
        array_splice($this->cardsPlayed,0,0);
        unset($this->cardsInHand[$player]);
        array_splice($this->cardsInHand,0,0);
        unset($this->playerStatus[$player]);
        array_splice($this->playerStatus,0,0);
        unset($this->playerProtection[$player]);
        array_splice($this->playerProtection,0,0);
    }

    /**
     * return the keys from the first dimension (the players)
     *
     *
     * @return array
     */
    public function getPlayers()
    {
        return array_keys($this->cardsInHand);
    }

    /**
     * Add a played card to the designated player
     *
     * @param string $player
     * @param int $cardid
     *
     */
    public function addPlayedCard($player, $cardid)
    {
        $this->cardsPlayed[$player][] = $cardid;
    }

    /**
     * Set cardsPlayed
     *
     * @param array $cardsPlayed
     *
     * @return Game
     */
    public function setCardsPlayed($cardsPlayed)
    {
        $this->cardsPlayed = $cardsPlayed;

        return $this;
    }

    /**
     * Get cardsPlayed
     *
     * @return array
     */
    public function getCardsPlayed()
    {
        return $this->cardsPlayed;
    }

    /**
     * Add in hand of the designated player a card
     *
     * @param string $player
     * @param int $cardid
     *
     */
    public function addCardInHand($player, $cardid)
    {
        $this->cardsInHand[$player][] = $cardid;
    }

    /**
     * Remove in hand of the designated player a card a boolean is returned true = card exist false if it doesn't
     *
     * @param string $player
     * @param int $cardid
     *
     * @return boolean
     */
    public function removeCardInHand($player, $cardid)
    {
        if (in_array($cardid,$this->cardsInHand[$player])){
            $this->cardsInHand[$player] = array_diff($this->cardsInHand[$player],array($cardid));
            //reorganise la main du joueur
            array_splice($this->cardsInHand[$player], 0, 0);
            return true;
        }else{
            return false;
        }
    }

    /**
     * Set cardsInHand
     *
     * @param array $cardsInHand
     *
     * @return Game
     */
    public function setCardsInHand($cardsInHand)
    {
        $this->cardsInHand = $cardsInHand;

        return $this;
    }

    /**
     * Get cardsInHand
     *
     * @return array
     */
    public function getCardsInHand()
    {
        return $this->cardsInHand;
    }

    /**
     * Remove the first card of the deck
     *
     * @return integer
     *
     */
    public function drawCard()
    {
        $card = array_pop($this->cardsInDeck);
        return $card;
    }

    /**
     * give to the designed player the secret card (usefull for some Prince exeption)
     *
     * @param string
     *
     */
    public function giveSecretCard($player)
    {
        $this->addCardInHand($player,$this->getCardHidden());
        array_shift($this->getCardsDiscarded());
    }

    /**
     * Generate a deck from the given cards and shuffle it
     *
     *
     */
    public function createDeck(){

        for ($x = 0; $x <= 15; $x++)
        {
            $this->cardsInDeck[] = $x;
        }
        shuffle($this->cardsInDeck);
    }

    /**
     * Set cardsInDeck
     *
     * @param array $cardsInDeck
     *
     * @return Game
     */
    public function setCardsInDeck($cardsInDeck)
    {
        $this->cardsInDeck = $cardsInDeck;

        return $this;
    }

    /**
     * Get cardsInDeck
     *
     * @return array
     */
    public function getCardsInDeck()
    {
        return $this->cardsInDeck;
    }

    /**
     * Add a discarded card in the discard
     *
     * @param int $cardid
     *
     */
    public function addDiscardedCard($cardid)
    {
        $this->cardsDiscarded[] = $cardid;
    }

    /**
     * Set cardsDiscarded
     *
     * @param array $cardsDiscarded
     *
     * @return Game
     */
    public function setCardsDiscarded($cardsDiscarded)
    {
        $this->cardsDiscarded = $cardsDiscarded;

        return $this;
    }

    /**
     * Get cardsDiscarded
     *
     * @return array
     */
    public function getCardsDiscarded()
    {
        return $this->cardsDiscarded;
    }

    /**
     * Set cardHidden
     *
     * @param integer $cardHidden
     *
     * @return Game
     */
    public function setCardHidden($cardHidden)
    {
        $this->cardHidden = $cardHidden;

        return $this;
    }

    /**
     * Get cardHidden
     *
     * @return integer
     */
    public function getCardHidden()
    {
        return $this->cardHidden;
    }


    /**
     * Reset the game to it's initial state
     *
     */
    public function resetGame(){
        $array = $this->getCardsInHand();
        $joueurs = array_keys($array);
        $this->playerTurn = 0;
        foreach ($joueurs as $joueur){
            $this->addPlayer($joueur);
        }
        $this->setCardHidden(null);
        $this->setCardsDiscarded(array());
        $this->setCardsInDeck(array());
    }


    /**
     * Set playerTurn
     *
     * @param integer $playerTurn
     *
     * @return Game
     */
    public function setPlayerTurn($playerTurn)
    {
        $this->playerTurn = $playerTurn;

        return $this;
    }

    /**
     * Advance to the next turn
     *
     *
     */
    public function advanceTurn()
    {
        $nb = count($this->getPlayers());
        do {
            $this->playerTurn++;
            if ($this->getPlayerTurn() >= $nb){
                $this->setPlayerTurn(0);
            }
        } while($this->getPlayerStatusByName($this->getPlayerNameTurn()) == 0 );
        //Si le joueur était protégé au dernier tour il ne doit plus l'être.
        if ($this->playerProtection[$this->getPlayerNameTurn()] == 1){$this->playerProtection[$this->getPlayerNameTurn()] = 0;}
    }

    /**
     * get the player's name wich have the hand
     *
     * @return string
     */
    public function getPlayerNameTurn()
    {
        $players = $this->getPlayers();
        return $players[$this->getPlayerTurn()];
    }

    /**
     * Get playerTurn
     *
     * @return integer
     */
    public function getPlayerTurn()
    {
        return $this->playerTurn;
    }

    /**
     * Set playerStatus
     *
     * @param array $playerStatus
     *
     * @return Game
     */
    public function setPlayerStatus($playerStatus)
    {
        $this->playerStatus = $playerStatus;
    
        return $this;
    }

    /**
     * Get playerStatus
     *
     * @return array
     */
    public function getPlayerStatus()
    {
        return $this->playerStatus;
    }

    /**
     * set a player out of round
     *
     * @param string
     */
    public function setPlayerOut($player)
    {
        $this->playerStatus[$player] = 0;
    }

    /**
     * get a player status by it's name
     * @param string
     * @return integer
     */
    public function getPlayerStatusByName($player)
    {
        return $this->playerStatus[$player];
    }

    /**
     * Control if the Countess effect is on
     *
     * @param string
     * @return boolean
     */
    public function isCountessActive($player)
    {
        $res = false;
        $hand = $this->cardsInHand[$player];
        if (in_array(14,$hand)){
            if (in_array(13,$hand) or in_array(11,$hand) or in_array(12,$hand) ){
                $res = true;
            }
        }
        return $res;
    }

    /**
     * Set party
     *
     * @param \EJ\LoveBundle\Entity\Party $party
     *
     * @return Game
     */
    public function setParty($party = null)
    {
        $this->party = $party;
    
        return $this;
    }

    /**
     * Get party
     *
     * @return \EJ\LoveBundle\Entity\Party
     */
    public function getParty()
    {
        return $this->party;
    }

    /**
     * Increment player score
     *
     * @param string
     */
    public function addPlayerScore($playername)
    {
        $this->party->addPlayerScore($playername);
    }

    /**
     * Check if the round is over
     *
     * @return boolean
     */
    public function isGameOver()
    {
        $res = false;
        $counts = array_count_values($this->getPlayerStatus());
        if($counts[1] == 1){ $res = true;}
        if(!$this->getCardsInDeck()){ $res = true;}
        return $res;
    }

    /**
     * get the winner and increment score
     *
     * @return winner of the round's name
     */
    public function getWinner()
    {
        $res = "";
        $counts = array_count_values($this->getPlayerStatus());
        if($counts[1] == 1){
            return array_search(1,$this->getPlayerStatus());
        }elseif (!$this->getCardsInDeck()){
            $test = -1;
            foreach ($this->getCardsInHand() as $key => $value){
                if($value[0] > $test){
                    $test = $value[0];
                    $res = $key;
                }
            }
        }
        return $res;
    }
    
    /**
    * apply the guard effect 
    * @return bool
    */
    public function guardEffect($player, $cardname){
        $res = false;
        $idcard = $this->cardsInHand[$player][0];
        $card = $this->getCard($idcard)->getNomCarte();
        if (strcmp($card, $cardname) == 0){
            $this->setPlayerOut($player);
            $this->removeCardInHand($player,$idcard);
            $this->addPlayedCard($player,$idcard);
            $res = true;
        }
        return $res;
    }
    
    /**
    * apply the prince effect
    *
    */
    public function princeEffect($player){
        // on récupere l'id de la carte en main
        $idcard = $this->cardsInHand[$player][0];
        $this->removeCardInHand($player,$idcard);
        $this->addPlayedCard($player,$idcard);
        if ($idcard == 15){
            $this->setPlayerOut($player);
        }else{
            if ($this->getCardsInDeck()){
                $card = $this->drawCard();
                $this->addCardInHand($player, $card );
            }else{
                $this->giveSecretCard($player);
            }
        }
    }

    /**
    * apply the baron effect
    *
    */
    public function baronEffect($player1, $player2){

        $idp1 = $this->cardsInHand[$player1][0];
        $idp2 = $this->cardsInHand[$player2][0];
        $cardvalp1 = $this->getcardVal($idp1);
        $cardvalp2 = $this->getcardVal($idp2);

        if($cardvalp1<$cardvalp2){ // si le joueur 2 a une carte plus forte 
            $this->setPlayerOut($player1);  
            $this->removeCardInHand($player1,$idp1);
            $this->addPlayedCard($player1,$idp1);
            return $player2;
        }
        if ($cardvalp1>$cardvalp2){ // si le joueur 1 a une carte plus forte
            $this->setPlayerOut($player2);  
            $this->removeCardInHand($player2,$idp2);
            $this->addPlayedCard($player2,$idp2);
            return $player1;
        }
        return 0;
    }
    
    /*
    * fonction qui permet de retourner la valeur de la carte de 0 a 8 pour ensuite faciliter la comparaison pour le baron
    *
    */
    public function getcardVal($id){
        $val = 0;
        if ($id>=0 and $id <=4){
            $val=0;
        }
        if ($id==5 or $id ==6){
            $val=1;
        }
        if ($id==7 or $id ==8){
            $val=2;
        }
        if ($id==9 or $id ==10){
            $val=3;
        }
        if ($id==11 or $id ==12){
            $val=4;
        }
        if ($id==13){
            $val=5;
        }
        if ($id==14){
            $val=6;
        }
        if ($id==15){
            $val=7;
        }
        return $val;
    }
    
    /**
    * apply the king effect
    *
    */
    public function kingEffect($player1, $player2){
        $tmp = $this->getCardsInHand();
        $p1 = $tmp[$player1];
        $p2 = $tmp[$player2];
        $this->cardsInHand[$player1] = $p2;
        $this->cardsInHand[$player2] = $p1;
    }
    
    /**
    * apply the princess effect
    *
    */
    public function princessEffect($player){
        $idcard = $this->cardsInHand[$player][0];
        $this->setPlayerOut($player);  
        $this->removeCardInHand($player,intval($idcard));
        $this->addPlayedCard($player, intval($idcard));
    }

    /**
     * apply the handmaid effect
     *
     */
    public function handmaidEffect($player){
        $this->playerProtection[$player] = 1;
    }

    /**
     * Set playerProtection
     *
     * @param array $playerProtection
     *
     * @return Game
     */
    public function setPlayerProtection($playerProtection)
    {
        $this->playerProtection = $playerProtection;
        return $this;
    }

    /**
     * Get playerProtection
     *
     * @return array
     */
    public function getPlayerProtection()
    {
        return $this->playerProtection;
    }
}
