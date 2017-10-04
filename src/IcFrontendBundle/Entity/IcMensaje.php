<?php

namespace IcFrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IcMensaje
 */
class IcMensaje
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
     * @var string
     */
    private $respuesta;

    /**
     * @var string
     */
    private $mensaje;

    /**
     * @var integer
     */
    private $idMensaje;

    /**
     * @var \IcFrontendBundle\Entity\IcUsuario
     */
    private $idUsuario;

    /**
     * @var \IcFrontendBundle\Entity\IcComprobacionDeGasto
     */
    private $idComprobacionDeGasto;

    /**
     * @var \IcFrontendBundle\Entity\IcAnticipoDeGasto
     */
    private $idAnticipoDeGasto;

    /**
     * @var \IcFrontendBundle\Entity\IcRequisicionDeCompra
     */
    private $idRequisicionDeCompra;

    /**
     * @var \IcFrontendBundle\Entity\IcReembolsoDeGasto
     */
    private $idReembolsoDeGasto;


    /**
     * Set fechaEnvio
     *
     * @param \DateTime $fechaEnvio
     * @return IcMensaje
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
     * @return IcMensaje
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
     * @return IcMensaje
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
     * Set respuesta
     *
     * @param string $respuesta
     * @return IcMensaje
     */
    public function setRespuesta($respuesta)
    {
        $this->respuesta = $respuesta;

        return $this;
    }

    /**
     * Get respuesta
     *
     * @return string 
     */
    public function getRespuesta()
    {
        return $this->respuesta;
    }

    /**
     * Set mensaje
     *
     * @param string $mensaje
     * @return IcMensaje
     */
    public function setMensaje($mensaje)
    {
        $this->mensaje = $mensaje;

        return $this;
    }

    /**
     * Get mensaje
     *
     * @return string 
     */
    public function getMensaje()
    {
        return $this->mensaje;
    }

    /**
     * Get idMensaje
     *
     * @return integer 
     */
    public function getIdMensaje()
    {
        return $this->idMensaje;
    }

    /**
     * Set idUsuario
     *
     * @param \IcFrontendBundle\Entity\IcUsuario $idUsuario
     * @return IcMensaje
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
     * Set idComprobacionDeGasto
     *
     * @param \IcFrontendBundle\Entity\IcComprobacionDeGasto $idComprobacionDeGasto
     * @return IcMensaje
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
     * Set idAnticipoDeGasto
     *
     * @param \IcFrontendBundle\Entity\IcAnticipoDeGasto $idAnticipoDeGasto
     * @return IcMensaje
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
     * Set idRequisicionDeCompra
     *
     * @param \IcFrontendBundle\Entity\IcRequisicionDeCompra $idRequisicionDeCompra
     * @return IcMensaje
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

    /**
     * Set idReembolsoDeGasto
     *
     * @param \IcFrontendBundle\Entity\IcReembolsoDeGasto $idReembolsoDeGasto
     * @return IcMensaje
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
}
