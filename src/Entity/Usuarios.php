<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Timestampable\Traits\TimestampableEntity;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UsuariosRepository")
 * @UniqueEntity(fields="email", message="Ya existe el email")
 */
class Usuarios implements UserInterface, \Serializable
{
	use TimestampableEntity;

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="array")
     */
    private $roles;

    /**
     * @ORM\Column(type="string", length=50, unique=true)
     * @Assert\NotBlank()
     * @Assert\Email()
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $password;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Personas", mappedBy="usuario", cascade={"persist", "remove"})
     */
    private $persona;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Empresas", mappedBy="usuario", cascade={"persist", "remove"})
     */
    private $empresa;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Apadrinamientos", mappedBy="usuario", orphanRemoval=true)
     */
    private $apadrinamientos;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Likes", mappedBy="usuario", orphanRemoval=true)
     */
    private $likes;

    /**
     * @Assert\NotBlank()
     * @Assert\Length(max=50)
     */
    private $plain_password;

    public function __construct()
    {
        $this->apadrinamientos = new ArrayCollection();
        $this->likes = new ArrayCollection();
        $this->roles = new ArrayCollection();
        $this->roles[] = 'ROLE_USER';
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getPersona(): ?Personas
    {
        return $this->persona;
    }

    public function setPersona(Personas $persona): self
    {
        $this->persona = $persona;

        // set the owning side of the relation if necessary
        if ($this !== $persona->getUsuario()) {
            $persona->setUsuario($this);
        }

        return $this;
    }

    public function getEmpresa(): ?Empresas
    {
        return $this->empresa;
    }

    public function setEmpresa(Empresas $empresa): self
    {
        $this->empresa = $empresa;

        // set the owning side of the relation if necessary
        if ($this !== $empresa->getUsuario()) {
            $empresa->setUsuario($this);
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
        if (!$this->apadrinamientos->contains($apadrinamientos)) {
            $this->apadrinamientos[] = $apadrinamientos;
            $apadrinamientos->setUsuario($this);
        }

        return $this;
    }

    public function removeApadrinamientos(Apadrinamientos $apadrinamientos): self
    {
        if ($this->apadrinamientos->contains($apadrinamientos)) {
            $this->apadrinamientos->removeElement($apadrinamientos);
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

    public function getUsername()
    {
        return $this->email;
    }

    public function getRoles()
    {
        return $this->roles;
    }

    public function addRol($rol): self
    {
        if (!$this->roles->contains($rol)) {
            $this->roles[] = $rol;
        }

        return $this;
    }

    public function removeRol($rol): self
    {
        if ($this->roles->contains($rol)) {
            $this->apadrinamientos->removeElement($rol);
        }

        return $this;
    }

    public function getSalt()
    {
    }

    public function eraseCredentials()
    {
    }

    /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->email,
            $this->password,
            // see section on salt below
            // $this->salt,
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->email,
            $this->password,
            // see section on salt below
            // $this->salt
            ) = unserialize($serialized, array('allowed_classes' => false));
    }

    /**
     * @return String|null
     */
    public function getPlainPassword(): ?String
    {
        return $this->plain_password;
    }

    /**
     * @param String $plain_password
     */
    public function setPlainPassword($plain_password): void
    {
        $this->plain_password = $plain_password;
    }
}
