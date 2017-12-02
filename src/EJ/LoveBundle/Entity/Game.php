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
        return $res;
    }
}
