<?php

namespace IcFrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IcSubcategoriaUsuario
 */
class IcSubcategoriaUsuario
{
    /**
     * @var string
     */
    private $cantidad;

    /**
     * @var integer
     */
    private $idCategoria;

    /**
     * @var integer
     */
    private $idSubcategoriaUsuario;

    /**
     * @var \IcFrontendBundle\Entity\IcUsuario
     */
    private $idUsuario;


    /**
     * Set cantidad
     *
     * @param string $cantidad
     * @return IcSubcategoriaUsuario
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return string 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set idCategoria
     *
     * @param integer $idCategoria
     * @return IcSubcategoriaUsuario
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
     * Get idSubcategoriaUsuario
     *
     * @return integer 
     */
    public function getIdSubcategoriaUsuario()
    {
        return $this->idSubcategoriaUsuario;
    }

    /**
     * Set idUsuario
     *
     * @param \IcFrontendBundle\Entity\IcUsuario $idUsuario
     * @return IcSubcategoriaUsuario
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
