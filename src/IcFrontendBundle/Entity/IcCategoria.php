<?php

namespace IcFrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IcCategoria
 */
class IcCategoria
{
    /**
     * @var string
     */
    private $nombre;

    /**
     * @var integer
     */
    private $idCategoria;


    /**
     * Set nombre
     *
     * @param string $nombre
     * @return IcCategoria
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
     * Get idCategoria
     *
     * @return integer 
     */
    public function getIdCategoria()
    {
        return $this->idCategoria;
    }
}
