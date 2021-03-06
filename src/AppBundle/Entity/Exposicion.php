<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Exposicion
 *
 * @ORM\Table(name="exposicion")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ExposicionRepository")
 */
class Exposicion
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date")
     */
    private $fecha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hora", type="time")
     */
    private $hora;

    /**
     * @var string
     *
     * @ORM\Column(name="lugar", type="string", length=255)
     */
    private $lugar;


     /**
     * @var int
     * 
     * @ORM\OneToOne(targetEntity="Trabajo", inversedBy="exposicion")
     * @ORM\JoinColumn(name="trabajo_id", referencedColumnName="id")
     */
    private $trabajo;

   

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Exposicion
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set hora
     *
     * @param \DateTime $hora
     *
     * @return Exposicion
     */
    public function setHora($hora)
    {
        $this->hora = $hora;

        return $this;
    }

    /**
     * Get hora
     *
     * @return \DateTime
     */
    public function getHora()
    {
        return $this->hora;
    }

    /**
     * Set lugar
     *
     * @param string $lugar
     *
     * @return Exposicion
     */
    public function setLugar($lugar)
    {
        $this->lugar = $lugar;

        return $this;
    }

    /**
     * Get lugar
     *
     * @return string
     */
    public function getLugar()
    {
        return $this->lugar;
    }

    /**
     * Set trabajo
     *
     * @param \AppBundle\Entity\Trabajo $trabajo
     *
     * @return Exposicion
     */
    public function setTrabajo(\AppBundle\Entity\Trabajo $trabajo = null)
    {
        $this->trabajo = $trabajo;

        return $this;
    }

    /**
     * Get trabajo
     *
     * @return \AppBundle\Entity\Trabajo
     */
    public function getTrabajo()
    {
        return $this->trabajo;
    }
}
