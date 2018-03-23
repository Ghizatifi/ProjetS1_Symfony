<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cat
 *
 * @ORM\Table(name="cat")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CatRepository")
 */
class Cat
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="lbl", type="string", length=255)
     */
    private $lbl;

    /**
     * @var string
     *
     * @ORM\Column(name="Prix", type="string", length=255)
     */
    private $prix;

    /**
     * @var int
     *
     * @ORM\Column(name="Qte", type="integer")
     */
    private $qte;


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
     * Set lbl
     *
     * @param string $lbl
     *
     * @return Cat
     */
    public function setLbl($lbl)
    {
        $this->lbl = $lbl;

        return $this;
    }

    /**
     * Get lbl
     *
     * @return string
     */
    public function getLbl()
    {
        return $this->lbl;
    }

    /**
     * Set prix
     *
     * @param string $prix
     *
     * @return Cat
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return string
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set qte
     *
     * @param integer $qte
     *
     * @return Cat
     */
    public function setQte($qte)
    {
        $this->qte = $qte;

        return $this;
    }

    /**
     * Get qte
     *
     * @return int
     */
    public function getQte()
    {
        return $this->qte;
    }
}

