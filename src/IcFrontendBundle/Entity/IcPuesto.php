<?php

namespace IcFrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IcPuesto
 */
class IcPuesto
{
    /**
     * @var string
     */
    private $nombre;

    /**
     * @var integer
     */
    private $idPuesto;

    /**
     * @var \IcFrontendBundle\Entity\IcArea
     */
    private $idArea;


    /**
     * Set nombre
     *
     * @param string $nombre
     * @return IcPuesto
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
     * Get idPuesto
     *
     * @return integer 
     */
    public function getIdPuesto()
    {
        return $this->idPuesto;
    }

    /**
     * Set idArea
     *
     * @param \IcFrontendBundle\Entity\IcArea $idArea
     * @return IcPuesto
     */
    public function setIdArea(\IcFrontendBundle\Entity\IcArea $idArea = null)
    {
        $this->idArea = $idArea;

        return $this;
    }

    /**
     * Get idArea
     *
     * @return \IcFrontendBundle\Entity\IcArea 
     */
    public function getIdArea()
    {
        return $this->idArea;
    }
}
