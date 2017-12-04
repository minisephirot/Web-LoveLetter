<?php

namespace EJ\LoveBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="party")
 */
class Party
{
    
    public function __construct()
    {
       $this->isStarted = 0;
        $this->isOver = 0;
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
     * @var string
     *
     * @ORM\Column(name="host", type="string", length=255, unique=false)
     */
    private $host;
    
    /**
     * @var array
     *
     * @ORM\Column(name="partyPlayers", type="array", nullable=true)
     */
    private $partyPlayers;

    /**
     * @var array
     *
     * @ORM\Column(name="$playerScore", type="array", nullable=true)
     */
    private $playerScore;

    /**
     * @var int
     *
     * @ORM\Column(name="isStarted", type="integer", nullable=false)
     */
    private $isStarted;

    /**
     * @var int
     *
     * @ORM\Column(name="isOver", type="integer", nullable=false)
     */
    private $isOver;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set host
     *
     * @param string $host
     *
     * @return Party
     */
    public function setHost($host)
    {
        $this->host = $host;

        return $this;
    }

    /**
     * Get host
     *
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Add player
     *
     * @param EJ\LoveBundle\Entity\User
     */
    public function addPlayer($player)
    {
        $this->partyPlayers[] = $player;
        $this->playerScore[$player->getUsername()] = 0;
    }

    /**
     * Set partyPlayers
     *
     * @param array $partyPlayers
     *
     * @return Party
     */
    public function setPartyPlayers($partyPlayers)
    {
        $this->partyPlayers = $partyPlayers;
    
        return $this;
    }

    /**
     * Get partyPlayers
     *
     * @return array
     */
    public function getPartyPlayers()
    {
        return $this->partyPlayers;
    }
    
    /**
     * Get isStarted
     *
     * @return integer
     */
    public function getIsStarted()
    {
        return $this->isStarted;
    }

    /**
     * Set isStarted
     *
     * @param integer $isStarted
     *
     * @return Party
     */
    public function setIsStarted($isStarted)
    {
        $this->isStarted = $isStarted;

        return $this;
    }

    /**
     * Set party started
     *
     *
     */
    public function setPartyStarted()
    {
        $this->isStarted = 1;
    }
    
    /**
     * Get partyPlayers
     *
     * @return array
     */
    public function getPartyPlayersName()
    {
        $listName = array();
        foreach ($this->partyPlayers as $key => $value){
            $listName[] = $value->getUsername();
        }
        return $listName;
    }

    /**
     * Give the number of players in the party (refresh purpose)
     *
     * @return integer
     */
    public function getNbPlayers()
    {
        return count($this->getPartyPlayersName());
    }

    /**
     * Set isOver
     *
     * @param integer $isOver
     *
     * @return Party
     */
    public function setIsOver($isOver)
    {
        $this->isOver = $isOver;
    
        return $this;
    }

    /**
     * Set party over
     *
     *
     */
    public function setPartyOver()
    {
        $this->isStarted = 1;
    }

    /**
     * Get isOver
     *
     * @return integer
     */
    public function getIsOver()
    {
        return $this->isOver;
    }

    /**
     * Set playerScore
     *
     * @param array $playerScore
     *
     * @return Party
     */
    public function setPlayerScore($playerScore)
    {
        $this->playerScore = $playerScore;
    
        return $this;
    }

    /**
     * Set a player score
     *
     * @param string $player
     *
     */
    public function addPlayerScore($player)
    {
        $this->playerScore[$player] = $this->playerScore[$player]+1;
        $this->checkIfOver($player);
    }

    /**
     * check if a player won the game
     *
     * @param string $player
     *
     */
    public function checkIfOver($player){
        $maxround = 7;
        $nb = $this->getNbPlayers();
        switch ($nb) {
            case 2:
                $maxround = 7;
                break;
            case 3:
                $maxround = 5;
                break;
            case 4:
                $maxround = 4;
                break;
            default:
                break;
        }
        if($this->playerScore[$player] >= $maxround){
            $this->isOver = 1;
        }
    }

    /**
     * Get playerScore
     *
     * @return array
     */
    public function getPlayerScore()
    {
        return $this->playerScore;
    }

    /**
     * Get round number
     *
     * @return integer
     */
    public function getRoundNumber()
    {
        $res = 1;
        $array = $this->getPlayerScore();
        $keys = array_keys($array);
        foreach ($keys as $key){
            $res += $array[$key][0];
        }
        return $res;
    }
}
