<?php

namespace IcFrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IcStatus
 */
class IcStatus
{
    /**
     * @var \DateTime
     */
    private $fechaEnvio;

    /**
     * @var \DateTime
     */
    private $fechaRecepcion;

    /**
     * @var \DateTime
     */
    private $fechaLectura;

    /**
     * @var integer
     */
    private $idStatus;

    /**
     * @var \IcFrontendBundle\Entity\IcUsuario
     */
    private $idUsuario;

    /**
     * @var \IcFrontendBundle\Entity\IcAnticipoDeGasto
     */
    private $idAnticipoDeGasto;

    /**
     * @var \IcFrontendBundle\Entity\IcComprobacionDeGasto
     */
    private $idComprobacionDeGasto;

    /**
     * @var \IcFrontendBundle\Entity\IcReembolsoDeGasto
     */
    private $idReembolsoDeGasto;

    /**
     * @var \IcFrontendBundle\Entity\IcRequisicionDeCompra
     */
    private $idRequisicionDeCompra;


    /**
     * Set fechaEnvio
     *
     * @param \DateTime $fechaEnvio
     * @return IcStatus
     */
    public function setFechaEnvio($fechaEnvio)
    {
        $this->fechaEnvio = $fechaEnvio;

        return $this;
    }

    /**
     * Get fechaEnvio
     *
     * @return \DateTime 
     */
    public function getFechaEnvio()
    {
        return $this->fechaEnvio;
    }

    /**
     * Set fechaRecepcion
     *
     * @param \DateTime $fechaRecepcion
     * @return IcStatus
     */
    public function setFechaRecepcion($fechaRecepcion)
    {
        $this->fechaRecepcion = $fechaRecepcion;

        return $this;
    }

    /**
     * Get fechaRecepcion
     *
     * @return \DateTime 
     */
    public function getFechaRecepcion()
    {
        return $this->fechaRecepcion;
    }

    /**
     * Set fechaLectura
     *
     * @param \DateTime $fechaLectura
     * @return IcStatus
     */
    public function setFechaLectura($fechaLectura)
    {
        $this->fechaLectura = $fechaLectura;

        return $this;
    }

    /**
     * Get fechaLectura
     *
     * @return \DateTime 
     */
    public function getFechaLectura()
    {
        return $this->fechaLectura;
    }

    /**
     * Get idStatus
     *
     * @return integer 
     */
    public function getIdStatus()
    {
        return $this->idStatus;
    }

    /**
     * Set idUsuario
     *
     * @param \IcFrontendBundle\Entity\IcUsuario $idUsuario
     * @return IcStatus
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

    /**
     * Set idAnticipoDeGasto
     *
     * @param \IcFrontendBundle\Entity\IcAnticipoDeGasto $idAnticipoDeGasto
     * @return IcStatus
     */
    public function setIdAnticipoDeGasto(\IcFrontendBundle\Entity\IcAnticipoDeGasto $idAnticipoDeGasto = null)
    {
        $this->idAnticipoDeGasto = $idAnticipoDeGasto;

        return $this;
    }

    /**
     * Get idAnticipoDeGasto
     *
     * @return \IcFrontendBundle\Entity\IcAnticipoDeGasto 
     */
    public function getIdAnticipoDeGasto()
    {
        return $this->idAnticipoDeGasto;
    }

    /**
     * Set idComprobacionDeGasto
     *
     * @param \IcFrontendBundle\Entity\IcComprobacionDeGasto $idComprobacionDeGasto
     * @return IcStatus
     */
    public function setIdComprobacionDeGasto(\IcFrontendBundle\Entity\IcComprobacionDeGasto $idComprobacionDeGasto = null)
    {
        $this->idComprobacionDeGasto = $idComprobacionDeGasto;

        return $this;
    }

    /**
     * Get idComprobacionDeGasto
     *
     * @return \IcFrontendBundle\Entity\IcComprobacionDeGasto 
     */
    public function getIdComprobacionDeGasto()
    {
        return $this->idComprobacionDeGasto;
    }

    /**
     * Set idReembolsoDeGasto
     *
     * @param \IcFrontendBundle\Entity\IcReembolsoDeGasto $idReembolsoDeGasto
     * @return IcStatus
     */
    public function setIdReembolsoDeGasto(\IcFrontendBundle\Entity\IcReembolsoDeGasto $idReembolsoDeGasto = null)
    {
        $this->idReembolsoDeGasto = $idReembolsoDeGasto;

        return $this;
    }

    /**
     * Get idReembolsoDeGasto
     *
     * @return \IcFrontendBundle\Entity\IcReembolsoDeGasto 
     */
    public function getIdReembolsoDeGasto()
    {
        return $this->idReembolsoDeGasto;
    }

    /**
     * Set idRequisicionDeCompra
     *
     * @param \IcFrontendBundle\Entity\IcRequisicionDeCompra $idRequisicionDeCompra
     * @return IcStatus
     */
    public function setIdRequisicionDeCompra(\IcFrontendBundle\Entity\IcRequisicionDeCompra $idRequisicionDeCompra = null)
    {
        $this->idRequisicionDeCompra = $idRequisicionDeCompra;

        return $this;
    }

    /**
     * Get idRequisicionDeCompra
     *
     * @return \IcFrontendBundle\Entity\IcRequisicionDeCompra 
     */
    public function getIdRequisicionDeCompra()
    {
        return $this->idRequisicionDeCompra;
    }
}
