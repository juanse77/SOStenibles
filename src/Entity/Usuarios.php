<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Timestampable\Traits\TimestampableEntity;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UsuariosRepository")
 */
class Usuarios
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
    private $rol;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $password;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Personas", mappedBy="usuarios", cascade={"persist", "remove"})
     */
    private $personas;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Empresas", mappedBy="usuarios", cascade={"persist", "remove"})
     */
    private $empresas;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Apadrinamientos", mappedBy="usuario", orphanRemoval=true)
     */
    private $apadrinamientos;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Likes", mappedBy="usuario", orphanRemoval=true)
     */
    private $likes;

    public function __construct()
    {
        $this->proyecto = new ArrayCollection();
        $this->likes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRol(): ?int
    {
        return $this->rol;
    }

    public function setRol(int $rol): self
    {
        $this->rol = $rol;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getPersonas(): ?Personas
    {
        return $this->personas;
    }

    public function setPersonas(Personas $personas): self
    {
        $this->personas = $personas;

        // set the owning side of the relation if necessary
        if ($this !== $personas->getUsuarios()) {
            $personas->setUsuarios($this);
        }

        return $this;
    }

    public function getEmpresas(): ?Empresas
    {
        return $this->empresas;
    }

    public function setEmpresas(Empresas $empresas): self
    {
        $this->empresas = $empresas;

        // set the owning side of the relation if necessary
        if ($this !== $empresas->getUsuarios()) {
            $empresas->setUsuarios($this);
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

    public function addApadrinamientos(Apadrinamientos $apadrinamientos): self
    {
        if (!$this->proyecto->contains($apadrinamientos)) {
            $this->proyecto[] = $apadrinamientos;
            $apadrinamientos->setUsuario($this);
        }

        return $this;
    }

    public function removeApadrinamientos(Apadrinamientos $apadrinamientos): self
    {
        if ($this->proyecto->contains($apadrinamientos)) {
            $this->proyecto->removeElement($apadrinamientos);
            // set the owning side to null (unless already changed)
            if ($apadrinamientos->getUsuario() === $this) {
                $apadrinamientos->setUsuario(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Likes[]
     */
    public function getLikes(): Collection
    {
        return $this->likes;
    }

    public function addLike(Likes $like): self
    {
        if (!$this->likes->contains($like)) {
            $this->likes[] = $like;
            $like->setUsuario($this);
        }

        return $this;
    }

    public function removeLike(Likes $like): self
    {
        if ($this->likes->contains($like)) {
            $this->likes->removeElement($like);
            // set the owning side to null (unless already changed)
            if ($like->getUsuario() === $this) {
                $like->setUsuario(null);
            }
        }

        return $this;
    }
}
