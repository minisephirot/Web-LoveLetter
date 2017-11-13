<?php

namespace EJ\LoveBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="party")
 */
class Party
{

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
     * @ORM\Column(name="partyPlayer", type="array", nullable=true)
     */
    private $partyPlayer;


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
     * 
     */
    public function addPlayer($player)
    {
        $this->partyPlayer[] = $player;
    }
    
    /**
     * Get partyPlayer
     *
     * @return array
     */
    public function getpartyPlayer()
    {
        return $this->partyPlayer;
    }
}

