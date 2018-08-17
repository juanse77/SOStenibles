<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AportacionesRepository")
 */
class Aportaciones
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Apadrinamientos", inversedBy="aportaciones")
	 * @ORM\JoinColumn(nullable=false)
	 */
    private $apadrinamiento;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Necesidades", inversedBy="aportaciones")
     * @ORM\JoinColumn(nullable=false)
     */
    private $necesidad;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getNecesidad(): ?Necesidades
    {
        return $this->necesidad;
    }

    public function setNecesidad(?Necesidades $necesidad): self
    {
        $this->necesidad = $necesidad;

        return $this;
    }
}
