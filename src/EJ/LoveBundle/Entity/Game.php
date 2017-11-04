<?php

namespace EJ\LoveBundle\Entity;

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
     * @ORM\ManyToMany(targetEntity="EJ\LoveBundle\Entity\Card", cascade={"persist"})
     */
    private $cards;


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
    public function addCard(\EJ\LoveBundle\Entity\Card $card)
    {
        $this->cards[] = $card;

        return $this;
    }

    /**
     * Remove card
     *
     * @param \EJ\LoveBundle\Entity\Card $card
     */
    public function removeCard(\EJ\LoveBundle\Entity\Card $card)
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
}
