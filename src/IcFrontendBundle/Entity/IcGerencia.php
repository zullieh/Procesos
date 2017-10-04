<?php

namespace IcFrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IcGerencia
 */
class IcGerencia
{
    /**
     * @var string
     */
    private $nombre;

    /**
     * @var integer
     */
    private $idGerencia;

    /**
     * @var \IcFrontendBundle\Entity\IcDireccion
     */
    private $idDireccion;


    /**
     * Set nombre
     *
     * @param string $nombre
     * @return IcGerencia
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
     * Get idGerencia
     *
     * @return integer 
     */
    public function getIdGerencia()
    {
        return $this->idGerencia;
    }

    /**
     * Set idDireccion
     *
     * @param \IcFrontendBundle\Entity\IcDireccion $idDireccion
     * @return IcGerencia
     */
    public function setIdDireccion(\IcFrontendBundle\Entity\IcDireccion $idDireccion = null)
    {
        $this->idDireccion = $idDireccion;

        return $this;
    }

    /**
     * Get idDireccion
     *
     * @return \IcFrontendBundle\Entity\IcDireccion 
     */
    public function getIdDireccion()
    {
        return $this->idDireccion;
    }
}
