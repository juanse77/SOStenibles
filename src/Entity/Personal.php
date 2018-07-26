<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Personal
 *
 * @ORM\Table(name="personal", indexes={@ORM\Index(name="id_persona", columns={"id_persona"}), @ORM\Index(name="id_apadrinamiento", columns={"id_apadrinamiento"})})
 * @ORM\Entity
 */
class Personal
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Apadrinamientos
     *
     * @ORM\ManyToOne(targetEntity="Apadrinamientos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_apadrinamiento", referencedColumnName="id")
     * })
     */
    private $idApadrinamiento;

    /**
     * @var \Personas
     *
     * @ORM\ManyToOne(targetEntity="Personas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_persona", referencedColumnName="id_persona")
     * })
     */
    private $idPersona;


}
