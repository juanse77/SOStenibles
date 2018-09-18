<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Gedmo\Timestampable\Traits\TimestampableEntity;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProyectosRepository")
 */
class Proyectos
{
	use TimestampableEntity;
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $nombre;

    /**
     * @ORM\Column(type="string", length=60, unique=true)
	 * @Gedmo\Slug(fields={"nombre"})
     */
    private $slug;

    /**
     * @ORM\Column(type="string", length=2000)
     */
    private $descripcion;

    /**
     * @ORM\Column(type="date")
     */
    private $fecha_inicio;

    /**
     * @ORM\Column(type="date")
     */
    private $fecha_fin;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Necesidades", mappedBy="proyecto", orphanRemoval=true)
     */
    private $necesidades;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Apadrinamientos", mappedBy="proyecto", orphanRemoval=true)
     */
    private $apadrinamientos;

    /**
     * @ORM\Column(type="string", length=127)
     */
    private $foto;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Usuarios", inversedBy="proyectos_likes")
     */
    private $likes;

    public function __construct()
    {
        $this->necesidades = new ArrayCollection();
        $this->apadrinamientos = new ArrayCollection();
        $this->likes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

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

    public function getFechaInicio(): ?\DateTimeInterface
    {
        return $this->fecha_inicio;
    }

    public function setFechaInicio(\DateTimeInterface $fecha_inicio): self
    {
        $this->fecha_inicio = $fecha_inicio;

        return $this;
    }

    public function getFechaFin(): ?\DateTimeInterface
    {
        return $this->fecha_fin;
    }

    public function setFechaFin(\DateTimeInterface $fecha_fin): self
    {
        $this->fecha_fin = $fecha_fin;

        return $this;
    }

    /**
     * @return Collection|Necesidades[]
     */
    public function getNecesidades(): Collection
    {
        return $this->necesidades;
    }

    public function addNecesidad(Necesidades $necesidad): self
    {
        if (!$this->necesidades->contains($necesidad)) {
            $this->necesidades[] = $necesidad;
            $necesidad->setProyecto($this);
        }

        return $this;
    }

    public function removeNecesidad(Necesidades $necesidad): self
    {
        if ($this->necesidades->contains($necesidad)) {
            $this->necesidades->removeElement($necesidad);
            // set the owning side to null (unless already changed)
            if ($necesidad->getProyecto() === $this) {
                $necesidad->setProyecto(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Apadrinamientos[]
     */
    public function getApadrinamientos(): Collection
    {
        return $this->apadrinamientos;
    }

    public function addApadrinamiento(Apadrinamientos $apadrinamiento): self
    {
        if (!$this->apadrinamientos->contains($apadrinamiento)) {
            $this->apadrinamientos[] = $apadrinamiento;
            $apadrinamiento->setProyecto($this);
        }

        return $this;
    }

    public function removeApadrinamiento(Apadrinamientos $apadrinamiento): self
    {
        if ($this->apadrinamientos->contains($apadrinamiento)) {
            $this->apadrinamientos->removeElement($apadrinamiento);
            // set the owning side to null (unless already changed)
            if ($apadrinamiento->getProyecto() === $this) {
                $apadrinamiento->setProyecto(null);
            }
        }

        return $this;
    }

    public function getFoto(): ?string
    {
        return $this->foto;
    }

    public function setFoto(string $foto): self
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * @return Collection|Usuarios[]
     */
    public function getLikes(): Collection
    {
        return $this->likes;
    }

    public function addLike(Usuarios $like): self
    {
        if (!$this->likes->contains($like)) {
            $this->likes[] = $like;
        }

        return $this;
    }

    public function removeLike(Usuarios $like): self
    {
        if ($this->likes->contains($like)) {
            $this->likes->removeElement($like);
        }

        return $this;
    }
}
