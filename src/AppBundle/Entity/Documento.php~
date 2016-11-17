<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Documento
 *
 * @ORM\Table(name="documento")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DocumentoRepository")
 */
class Documento
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
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=255, unique=true)
     */
    private $link;

    /**
     * @var int
     *
     * @ORM\Column(name="nro", type="integer", unique=true)
     */
    private $nro;

    /**
     * @var bool
     *
     * @ORM\Column(name="finalizado", type="boolean")
     */
    private $finalizado;

     /**
     * @var int
     * 
     * @ORM\OneToOne(targetEntity="Trabajo", inversedBy="documento")
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
     * Set link
     *
     * @param string $link
     *
     * @return documento
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set nro
     *
     * @param integer $nro
     *
     * @return documento
     */
    public function setNro($nro)
    {
        $this->nro = $nro;

        return $this;
    }

    /**
     * Get nro
     *
     * @return int
     */
    public function getNro()
    {
        return $this->nro;
    }

    /**
     * Set finalizado
     *
     * @param boolean $finalizado
     *
     * @return documento
     */
    public function setFinalizado($finalizado)
    {
        $this->finalizado = $finalizado;

        return $this;
    }

    /**
     * Get finalizado
     *
     * @return bool
     */
    public function getFinalizado()
    {
        return $this->finalizado;
    }

    /**
     * Set trabajo
     *
     * @param integer $trabajo
     *
     * @return Documento
     */
    public function setTrabajo($trabajo)
    {
        $this->trabajo = $trabajo;

        return $this;
    }

    /**
     * Get trabajo
     *
     * @return integer
     */
    public function getTrabajo()
    {
        return $this->trabajo;
    }
}
