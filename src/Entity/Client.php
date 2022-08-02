<?php

namespace App\Entity;

use ORM\Id;
use Doctrine\ORM\Mapping as ORM;



/**
 * @ORM\Entity(repositoryClass=ClientRepository::class)
 */
class Client
{
    /**
     * @var int|null
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(name = "id",type="integer")
     */

    private $id;

    /**
     * @var string|null
     * @ORM\Column(name = "nom", type="string", length=100)
     */

    private  $nom;

    /**
     * @var string|null
     * @ORM\Column(name = "prenom",type="string" , length=100)
     */
    private $prenom;

    /**
     * @var string|null
     * @ORM\Column(name = "mail",type="string",  length=100)
     */
    private  $mail;

    /** MANY-TO-ONE BIDIRECTIONAL, OWNING SIDE
     * @var Panier
     * @ORM\ManyToOne(targetEntity="Panier", inversedBy="client")
     */
    private $panier;


    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }


    /**
     * @return string|null
     */
    public function getNom(): ?string
    {
        return $this->nom;
    }

    /**
     * @param string|null $nom
     */
    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    /**
     * @param string|null $prenom
     */
    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getMail(): ?string
    {
        return $this->mail;
    }

    /**
     * @param string|null $mail
     */
    public function setMail(string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }
}
