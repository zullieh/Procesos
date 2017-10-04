<?php

namespace IcFrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IcArea
 */
class IcArea
{
    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $correo;

    /**
     * @var string
     */
    private $telefono;

    /**
     * @var integer
     */
    private $idArea;

    /**
     * @var \IcFrontendBundle\Entity\IcGerencia
     */
    private $idGerencia;


    /**
     * Set nombre
     *
     * @param string $nombre
     * @return IcArea
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set correo
     *
     * @param string $correo
     * @return IcArea
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

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return IcArea
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Get idArea
     *
     * @return integer 
     */
    public function getIdArea()
    {
        return $this->idArea;
    }

    /**
     * Set idGerencia
     *
     * @param \IcFrontendBundle\Entity\IcGerencia $idGerencia
     * @return IcArea
     */
    public function setIdGerencia(\IcFrontendBundle\Entity\IcGerencia $idGerencia = null)
    {
        $this->idGerencia = $idGerencia;

        return $this;
    }

    /**
     * Get idGerencia
     *
     * @return \IcFrontendBundle\Entity\IcGerencia 
     */
    public function getIdGerencia()
    {
        return $this->idGerencia;
    }
}
