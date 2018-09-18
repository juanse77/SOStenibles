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
     * @ORM\Column(type="json")
     */
    private $roles = [];

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
     * @Assert\NotBlank()
     * @Assert\Length(max=50)
     */
    private $plain_password;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Proyectos", mappedBy="likes")
     */
    private $proyectos_likes;

    public function __construct()
    {
        $this->apadrinamientos = new ArrayCollection();
        $this->likes = new ArrayCollection();
        $this->proyectos_likes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): string
    {
        return (string) $this->email;
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



    public function getUsername()
    {
        return $this->email;
    }

    public function getRoles()
    {
        $roles = $this->roles;
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles)
    {
        $this->roles = $roles;

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

    /**
     * @return Collection|Proyectos[]
     */
    public function getProyectosLikes(): Collection
    {
        return $this->proyectos_likes;
    }

    public function addProyectosLike(Proyectos $proyectosLike): self
    {
        if (!$this->proyectos_likes->contains($proyectosLike)) {
            $this->proyectos_likes[] = $proyectosLike;
            $proyectosLike->addLike($this);
        }

        return $this;
    }

    public function removeProyectosLike(Proyectos $proyectosLike): self
    {
        if ($this->proyectos_likes->contains($proyectosLike)) {
            $this->proyectos_likes->removeElement($proyectosLike);
            $proyectosLike->removeLike($this);
        }

        return $this;
    }
}
