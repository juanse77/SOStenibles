<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Timestampable\Traits\TimestampableEntity;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PersonalRepository")
 */
class Personal
{
	use TimestampableEntity;
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Personas", inversedBy="personals")
     * @ORM\JoinColumn(nullable=false)
     */
    private $persona;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Apadrinamientos", inversedBy="personals")
     * @ORM\JoinColumn(nullable=false)
     */
    private $apadrinamiento;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPersona(): ?Personas
    {
        return $this->persona;
    }

    public function setPersona(?Personas $persona): self
    {
        $this->persona = $persona;

        return $this;
    }

    public function getApadrinamiento(): ?Apadrinamientos
    {
        return $this->apadrinamiento;
    }

    public function setApadrinamiento(?Apadrinamientos $apadrinamiento): self
    {
        $this->apadrinamiento = $apadrinamiento;

        return $this;
    }
}
