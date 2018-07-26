<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Necesidades
 *
 * @ORM\Table(name="necesidades", indexes={@ORM\Index(name="id_proyecto", columns={"id_proyecto"})})
 * @ORM\Entity
 */
class Necesidades
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
     * @var int
     *
     * @ORM\Column(name="tipo", type="integer", nullable=false)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=100, nullable=false)
     */
    private $descripcion;

    /**
     * @var int
     *
     * @ORM\Column(name="cantidad_necesaria", type="integer", nullable=false)
     */
    private $cantidadNecesaria;

    /**
     * @var \Proyectos
     *
     * @ORM\ManyToOne(targetEntity="Proyectos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_proyecto", referencedColumnName="id")
     * })
     */
    private $idProyecto;


}
