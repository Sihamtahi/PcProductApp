<?php

declare(strict_types=1);

namespace App\Entity;

use ORM\Id;
use Doctrine\ORM\Mapping as ORM;



/**
 * @ORM\Entity(repositoryClass=LigneCtalogueRepository::class)
 */
class LigneCatalogue
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(name = "id",type="integer")
     */

    private $id;

    /**
     * @ORM\Column(name = "nombre", type="integer")
     */

    private  $nombre;

    /**
     * @var Collection|Produit[]
     * @ORM\OneToMany(targetEntity="Produit",  mappedBy="ligne")
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

    public function getNombre(): ?int
    {
        return $this->nombre;
    }

    public function setNombre(int  $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }


    /**
     * @return Produit[]|Collection
     */
    public function getProduits()
    {
        return $this->produits;
    }

    /**
     * @param Product[]|Collection $products
     */
    public function setProduits($produits): void
    {
        $this->produits = $produits;
    }
}
