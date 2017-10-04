<?php

namespace IcFrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IcDireccion
 */
class IcDireccion
{
    /**
     * @var string
     */
    private $nombre;

    /**
     * @var integer
     */
    private $idDireccion;

    /**
     * @var \IcFrontendBundle\Entity\IcCentroTrabajo
     */
    private $idCentro;


    /**
     * Set nombre
     *
     * @param string $nombre
     * @return IcDireccion
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
     * Get idDireccion
     *
     * @return integer 
     */
    public function getIdDireccion()
    {
        return $this->idDireccion;
    }

    /**
     * Set idCentro
     *
     * @param \IcFrontendBundle\Entity\IcCentroTrabajo $idCentro
     * @return IcDireccion
     */
    public function setIdCentro(\IcFrontendBundle\Entity\IcCentroTrabajo $idCentro = null)
    {
        $this->idCentro = $idCentro;

        return $this;
    }

    /**
     * Get idCentro
     *
     * @return \IcFrontendBundle\Entity\IcCentroTrabajo 
     */
    public function getIdCentro()
    {
        return $this->idCentro;
    }
}
