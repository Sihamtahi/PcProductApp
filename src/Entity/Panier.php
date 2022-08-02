<?php

declare(strict_types=1);

namespace App\Entity;

use ORM\Id;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;





/**
 * @ORM\Entity(repositoryClass=PanierRepository::class)
 */
class Panier
{
    /**
     *  
     * @var int|null
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(name = "id",type="integer")
     */

    private $id;

    /**
     * @var \DateTime|null
     * @ORM\Column(name = "date_time", type="datetime")
     */

    private $dateTime;

    /**
     * @var Client|null
     * @ORM\OneToOne(targetEntity="Client", mappedBy="panier")
     */
    private  $client;

    /**
     * @var Collection|Produits[]
     * @ORM\ManyToMany(targetEntity="Produit")
     */
    private $produits;



    // public function __construct()
    // {
    //     $this->produits = new ArrayCollection();
    // }


    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }


    /**
     * @return \DateTime|null
     */
    public function getDateTime(): ?\DateTime
    {
        return $this->dateTime;
    }


    /**
     * @param \DateTime|null $dateTime
     */
    public function setDateTime(?\DateTime $dateTime): void
    {
        $this->dateTime = $dateTime;
    }



    /**
     * @return Client|null
     */
    public function getClient(): ?Client
    {
        return $this->client;
    }


    /**
     * @param Client|null $client
     */
    public function setClient(?Client $client): void
    {
        $this->client = $client;
    }


    /**
     * @return Produit[]|Collection
     */
    public function getProduits()
    {
        return $this->produits;
    }

    /**
     * @param Produit[]|Collection $produits
     */
    public function setProduits($produits): void
    {
        $this->produits = $produits;
    }
}
