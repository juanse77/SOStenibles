<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ApadrinamientosRepository")
 */
class Apadrinamientos
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Usuarios", inversedBy="apadrinamientos")
     * @ORM\JoinColumn(nullable=false)
     */
    private $usuario;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Proyectos", inversedBy="apadrinamientos")
     * @ORM\JoinColumn(nullable=false)
     */
    private $proyecto;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Aportaciones", mappedBy="apadrinamiento")
     */
    private $aportaciones;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Personal", mappedBy="apadrinamiento", orphanRemoval=true)
     */
    private $personals;

    public function __construct()
    {
        $this->aportaciones = new ArrayCollection();
        $this->personals = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsuario(): ?Usuarios
    {
        return $this->usuario;
    }

    public function setUsuario(?Usuarios $usuario): self
    {
        $this->usuario = $usuario;

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
            $aportacione->setApadrinamiento($this);
        }

        return $this;
    }

    public function removeAportacione(Aportaciones $aportacione): self
    {
        if ($this->aportaciones->contains($aportacione)) {
            $this->aportaciones->removeElement($aportacione);
            // set the owning side to null (unless already changed)
            if ($aportacione->getApadrinamiento() === $this) {
                $aportacione->setApadrinamiento(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Personal[]
     */
    public function getPersonals(): Collection
    {
        return $this->personals;
    }

    public function addPersonal(Personal $personal): self
    {
        if (!$this->personals->contains($personal)) {
            $this->personals[] = $personal;
            $personal->setApadrinamiento($this);
        }

        return $this;
    }

    public function removePersonal(Personal $personal): self
    {
        if ($this->personals->contains($personal)) {
            $this->personals->removeElement($personal);
            // set the owning side to null (unless already changed)
            if ($personal->getApadrinamiento() === $this) {
                $personal->setApadrinamiento(null);
            }
        }

        return $this;
    }
}
