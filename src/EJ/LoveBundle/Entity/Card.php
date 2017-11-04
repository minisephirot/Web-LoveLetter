<?php

namespace EJ\LoveBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Card
 *
 * @ORM\Table(name="card")
 * @ORM\Entity(repositoryClass="EJ\LoveBundle\Repository\CardRepository")
 */
class Card
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", unique=true)
     * @ORM\Id
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nomCarte", type="string", length=255, unique=false)
     */
    private $nomCarte;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, unique=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="imageCarte", type="string", length=255, unique=false)
     */
    private $imageCarte;


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
     * Set nomCarte
     *
     * @param string $nomCarte
     *
     * @return Card
     */
    public function setNomCarte($nomCarte)
    {
        $this->nomCarte = $nomCarte;

        return $this;
    }

    /**
     * Get nomCarte
     *
     * @return string
     */
    public function getNomCarte()
    {
        return $this->nomCarte;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Card
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set imageCarte
     *
     * @param string $imageCarte
     *
     * @return Card
     */
    public function setImageCarte($imageCarte)
    {
        $this->imageCarte = $imageCarte;

        return $this;
    }

    /**
     * Get imageCarte
     *
     * @return string
     */
    public function getImageCarte()
    {
        return $this->imageCarte;
    }


    public function setValue($idcarte,$nom,$desc,$img)
    {
        $this->id = $idcarte;
        $this->nomCarte = $nom;
        $this->description = $desc;
        $this->imageCarte = $img;
    }


    /**
     * Set id
     *
     * @param integer $id
     *
     * @return Card
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
