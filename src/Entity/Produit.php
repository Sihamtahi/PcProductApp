<?php

namespace App\Entity;

use ORM\Id;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Table(name="produit")
 * @ORM\Entity()
 */


class Produit
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(name = "id",type="integer")
     */

    private $id;

    /**
     * @ORM\Column(name = "titre", type="string", length=255)
     */

    private  $titre;

    /**
     * @ORM\Column(name = "description",type="text")
     */
    private $description;

    /**
     * @ORM\Column(name = "prix",type="integer")
     */
    private  $prix;

    /** MANY-TO-ONE BIDIRECTIONAL, OWNING SIDE
     * @var LigneCatalogue
     * @ORM\ManyToOne(targetEntity="LigneCatalogue", inversedBy="produits")
     */
    private  $ligne;

    // /** MANY-TO-ONE BIDIRECTIONAL, OWNING SIDE
    //  * @var Panier
    //  * @ORM\ManyToOne(targetEntity="Panier", inversedBy="produits")
    //  */
    // private  $panier;




    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }



    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }
}
