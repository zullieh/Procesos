<?php

namespace IcFrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IcSubcategoria
 */
class IcSubcategoria
{
    /**
     * @var string
     */
    private $nombre;

    /**
     * @var integer
     */
    private $idSubcategoria;

    /**
     * @var \IcFrontendBundle\Entity\IcCategoria
     */
    private $idCategoria;


    /**
     * Set nombre
     *
     * @param string $nombre
     * @return IcSubcategoria
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
     * Get idSubcategoria
     *
     * @return integer 
     */
    public function getIdSubcategoria()
    {
        return $this->idSubcategoria;
    }

    /**
     * Set idCategoria
     *
     * @param \IcFrontendBundle\Entity\IcCategoria $idCategoria
     * @return IcSubcategoria
     */
    public function setIdCategoria(\IcFrontendBundle\Entity\IcCategoria $idCategoria = null)
    {
        $this->idCategoria = $idCategoria;

        return $this;
    }

    /**
     * Get idCategoria
     *
     * @return \IcFrontendBundle\Entity\IcCategoria 
     */
    public function getIdCategoria()
    {
        return $this->idCategoria;
    }
}
