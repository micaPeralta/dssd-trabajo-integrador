<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Trabajo
 *
 * @ORM\Table(name="trabajo")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TrabajoRepository")
 */
class Trabajo
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
     * @ORM\Column(name="titulo", type="string", length=255)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="tema", type="string", length=255)
     */
    private $tema;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_presentacion", type="string", length=255)
     */
    private $tipoPresentacion;

    /**
     * @var string
     *
     * @ORM\Column(name="autor", type="string", length=255)
     */
    private $autor;

    /**
     * @var string
     *
     * @ORM\Column(name="autores_secundarios", type="string", length=255)
     */
    private $autoresSecundarios;

    /**
     * @var bool
     *
     * @ORM\Column(name="aprobado", type="boolean", nullable=true)
     */
    private $aprobado;

    /**
     * @var string
     *
     * @ORM\Column(name="resumen", type="string", length=255)
     */
    private $resumen;

    /**
     * @var string
     *
     * @ORM\Column(name="correo_gmail", type="string", length=255)
     */
    private $correoGmail;

    /**
     * @var string
     *
     * @ORM\Column(name="correo", type="string", length=255)
     */
    private $correo;


    /**
     * @var int
     * @ORM\OneToOne(targetEntity="Documento", mappedBy="trabajo")
     */
    private $documento;


    /**
     * @var int
     * @ORM\OneToOne(targetEntity="Exposicion", mappedBy="trabajo")
     */
    private $exposicion;



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
     * Set titulo
     *
     * @param string $titulo
     *
     * @return Trabajo
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set tema
     *
     * @param string $tema
     *
     * @return Trabajo
     */
    public function setTema($tema)
    {
        $this->tema = $tema;

        return $this;
    }

    /**
     * Get tema
     *
     * @return string
     */
    public function getTema()
    {
        return $this->tema;
    }

    /**
     * Set tipoPresentacion
     *
     * @param string $tipoPresentacion
     *
     * @return Trabajo
     */
    public function setTipoPresentacion($tipoPresentacion)
    {
        $this->tipoPresentacion = $tipoPresentacion;

        return $this;
    }

    /**
     * Get tipoPresentacion
     *
     * @return string
     */
    public function getTipoPresentacion()
    {
        return $this->tipoPresentacion;
    }

    /**
     * Set autor
     *
     * @param string $autor
     *
     * @return Trabajo
     */
    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get autor
     *
     * @return string
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set autoresSecundarios
     *
     * @param string $autoresSecundarios
     *
     * @return Trabajo
     */
    public function setAutoresSecundarios($autoresSecundarios)
    {
        $this->autoresSecundarios = $autoresSecundarios;

        return $this;
    }

    /**
     * Get autoresSecundarios
     *
     * @return string
     */
    public function getAutoresSecundarios()
    {
        return $this->autoresSecundarios;
    }

    /**
     * Set aprobado
     *
     * @param boolean $aprobado
     *
     * @return Trabajo
     */
    public function setAprobado($aprobado)
    {
        $this->aprobado = $aprobado;

        return $this;
    }

    /**
     * Get aprobado
     *
     * @return bool
     */
    public function getAprobado()
    {
        return $this->aprobado;
    }

    /**
     * Set resumen
     *
     * @param string $resumen
     *
     * @return Trabajo
     */
    public function setResumen($resumen)
    {
        $this->resumen = $resumen;

        return $this;
    }

    /**
     * Get resumen
     *
     * @return string
     */
    public function getResumen()
    {
        return $this->resumen;
    }

    /**
     * Set correoGmail
     *
     * @param string $correoGmail
     *
     * @return Trabajo
     */
    public function setCorreoGmail($correoGmail)
    {
        $this->correoGmail = $correoGmail;

        return $this;
    }

    /**
     * Get correoGmail
     *
     * @return string
     */
    public function getCorreoGmail()
    {
        return $this->correoGmail;
    }

    /**
     * Set correo
     *
     * @param string $correo
     *
     * @return Trabajo
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;

        return $this;
    }

    /**
     * Get correo
     *
     * @return string
     */
    public function getCorreo()
    {
        return $this->correo;
    }


    public function getDocumento(){
        return $this->documento;
    }

    /**
     * Set documento
     *
     * @param \AppBundle\Entity\Documento $documento
     *
     * @return Trabajo
     */
    public function setDocumento(\AppBundle\Entity\Documento $documento = null)
    {
        $this->documento = $documento;

        return $this;
    }

    /**
     * Set exposicion
     *
     * @param \AppBundle\Entity\Exposicion $exposicion
     *
     * @return Trabajo
     */
    public function setExposicion(\AppBundle\Entity\Exposicion $exposicion = null)
    {
        $this->exposicion = $exposicion;

        return $this;
    }

    /**
     * Get exposicion
     *
     * @return \AppBundle\Entity\Exposicion
     */
    public function getExposicion()
    {
        return $this->exposicion;
    }
}
