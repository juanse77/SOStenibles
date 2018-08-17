<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Timestampable\Traits\TimestampableEntity;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PersonasRepository")
 */
class Personas
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
     * @ORM\Column(type="string", length=50)
     */
    private $apellidos;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $dni;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $telefono;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $foto;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $fecha_nacimiento;

    /**
     * @ORM\Column(type="string", length=128, nullable=true)
     */
    private $direccion;

    /**
     * @ORM\Column(type="string", length=1024, nullable=true)
     */
    private $biografia;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Usuarios", inversedBy="personas", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $usuarios;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Personal", mappedBy="persona", orphanRemoval=true)
     */
    private $personals;

    public function __construct()
    {
        $this->personals = new ArrayCollection();
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

    public function getApellidos(): ?string
    {
        return $this->apellidos;
    }

    public function setApellidos(string $apellidos): self
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    public function getDni(): ?string
    {
        return $this->dni;
    }

    public function setDni(string $dni): self
    {
        $this->dni = $dni;

        return $this;
    }

    public function getTelefono(): ?string
    {
        return $this->telefono;
    }

    public function setTelefono(string $telefono): self
    {
        $this->telefono = $telefono;

        return $this;
    }

    public function getFoto(): ?string
    {
        return $this->foto;
    }

    public function setFoto(?string $foto): self
    {
        $this->foto = $foto;

        return $this;
    }

    public function getFechaNacimiento(): ?string
    {
        return $this->fecha_nacimiento;
    }

    public function setFechaNacimiento(?string $fecha_nacimiento): self
    {
        $this->fecha_nacimiento = $fecha_nacimiento;

        return $this;
    }

    public function getDireccion(): ?string
    {
        return $this->direccion;
    }

    public function setDireccion(?string $direccion): self
    {
        $this->direccion = $direccion;

        return $this;
    }

    public function getBiografia(): ?string
    {
        return $this->biografia;
    }

    public function setBiografia(?string $biografia): self
    {
        $this->biografia = $biografia;

        return $this;
    }

    public function getUsuarios(): ?Usuarios
    {
        return $this->usuarios;
    }

    public function setUsuarios(Usuarios $usuarios): self
    {
        $this->usuarios = $usuarios;

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
            $personal->setPersona($this);
        }

        return $this;
    }

    public function removePersonal(Personal $personal): self
    {
        if ($this->personals->contains($personal)) {
            $this->personals->removeElement($personal);
            // set the owning side to null (unless already changed)
            if ($personal->getPersona() === $this) {
                $personal->setPersona(null);
            }
        }

        return $this;
    }
}
