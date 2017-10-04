<?php

namespace IcFrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IcCategoriaUsuario
 */
class IcCategoriaUsuario
{
    /**
     * @var integer
     */
    private $idCategoria;

    /**
     * @var integer
     */
    private $idCategoriaUsuario;

    /**
     * @var \IcFrontendBundle\Entity\IcUsuario
     */
    private $idUsuario;


    /**
     * Set idCategoria
     *
     * @param integer $idCategoria
     * @return IcCategoriaUsuario
     */
    public function setIdCategoria($idCategoria)
    {
        $this->idCategoria = $idCategoria;

        return $this;
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

    /**
     * Get idCategoriaUsuario
     *
     * @return integer 
     */
    public function getIdCategoriaUsuario()
    {
        return $this->idCategoriaUsuario;
    }

    /**
     * Set idUsuario
     *
     * @param \IcFrontendBundle\Entity\IcUsuario $idUsuario
     * @return IcCategoriaUsuario
     */
    public function setIdUsuario(\IcFrontendBundle\Entity\IcUsuario $idUsuario = null)
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }

    /**
     * Get idUsuario
     *
     * @return \IcFrontendBundle\Entity\IcUsuario 
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }
}
