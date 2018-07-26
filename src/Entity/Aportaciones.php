<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Aportaciones
 *
 * @ORM\Table(name="aportaciones", indexes={@ORM\Index(name="id_apadrinamiento", columns={"id_apadrinamiento"}), @ORM\Index(name="id_necesidad", columns={"id_necesidad"})})
 * @ORM\Entity
 */
class Aportaciones
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
     * @ORM\Column(name="cantidad_aportada", type="integer", nullable=false)
     */
    private $cantidadAportada;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_aportacion", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $fechaAportacion = 'CURRENT_TIMESTAMP';

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
     * @var \Necesidades
     *
     * @ORM\ManyToOne(targetEntity="Necesidades")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_necesidad", referencedColumnName="id")
     * })
     */
    private $idNecesidad;


}
