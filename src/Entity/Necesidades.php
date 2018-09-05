<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Timestampable\Traits\TimestampableEntity;

/**
 * @ORM\Entity(repositoryClass="App\Repository\NecesidadesRepository")
 */
class Necesidades
{
	use TimestampableEntity;
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="smallint")
     */
    private $tipo;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $descripcion;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Proyectos", inversedBy="necesidades")
     * @ORM\JoinColumn(nullable=false)
     */
    private $proyecto;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Aportaciones", mappedBy="necesidad", orphanRemoval=true)
     */
    private $aportaciones;

    /**
     * @ORM\Column(type="integer")
     */
    private $cantidad_necesaria;

    public function __construct()
    {
        $this->aportaciones = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTipo(): ?int
    {
        return $this->tipo;
    }

    public function setTipo(int $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getProyecto(): ?Proyectos
    {
        return $this->proyecto;
    }

    public function setProyecto(?Proyectos $proyecto): self
    {
        $this->proyecto = $proyecto;

        return $this;
    }

    /**
     * @return Collection|Aportaciones[]
     */
    public function getAportaciones(): Collection
    {
        return $this->aportaciones;
    }

    public function addAportacione(Aportaciones $aportacione): self
    {
        if (!$this->aportaciones->contains($aportacione)) {
            $this->aportaciones[] = $aportacione;
            $aportacione->setNecesidad($this);
        }

        return $this;
    }

    public function removeAportacione(Aportaciones $aportacione): self
    {
        if ($this->aportaciones->contains($aportacione)) {
            $this->aportaciones->removeElement($aportacione);
            // set the owning side to null (unless already changed)
            if ($aportacione->getNecesidad() === $this) {
                $aportacione->setNecesidad(null);
            }
        }

        return $this;
    }

    public function getCantidadNecesaria(): ?int
    {
        return $this->cantidad_necesaria;
    }

    public function setCantidadNecesaria(int $cantidad_necesaria): self
    {
        $this->cantidad_necesaria = $cantidad_necesaria;

        return $this;
    }
}
