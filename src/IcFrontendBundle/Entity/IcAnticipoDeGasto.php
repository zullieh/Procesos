<?php

namespace IcFrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IcAnticipoDeGasto
 */
class IcAnticipoDeGasto
{
    /**
     * @var string
     */
    private $folioAnticipo;

    /**
     * @var \DateTime
     */
    private $fechaSolicitud;

    /**
     * @var string
     */
    private $metodoPago;

    /**
     * @var string
     */
    private $numeroTarjeta;

    /**
     * @var string
     */
    private $numeroCuenta;

    /**
     * @var string
     */
    private $cuentaContable;

    /**
     * @var string
     */
    private $numeroEmpleado;

    /**
     * @var string
     */
    private $tipoMoneda;

    /**
     * @var string
     */
    private $destinoDeViaje;

    /**
     * @var \DateTime
     */
    private $fechaDesde;

    /**
     * @var \DateTime
     */
    private $fechaHasta;

    /**
     * @var string
     */
    private $motivoDelViaje;

    /**
     * @var string
     */
    private $firmaSolicitante;

    /**
     * @var string
     */
    private $firmaAutorizacion;

    /**
     * @var integer
     */
    private $idAnticipoDeGasto;

    /**
     * @var \IcFrontendBundle\Entity\IcCentroTrabajo
     */
    private $idCentroTrabajo;

    /**
     * @var \IcFrontendBundle\Entity\IcUsuario
     */
    private $idUsuarioSolicitante;


    /**
     * Set folioAnticipo
     *
     * @param string $folioAnticipo
     * @return IcAnticipoDeGasto
     */
    public function setFolioAnticipo($folioAnticipo)
    {
        $this->folioAnticipo = $folioAnticipo;

        return $this;
    }

    /**
     * Get folioAnticipo
     *
     * @return string 
     */
    public function getFolioAnticipo()
    {
        return $this->folioAnticipo;
    }

    /**
     * Set fechaSolicitud
     *
     * @param \DateTime $fechaSolicitud
     * @return IcAnticipoDeGasto
     */
    public function setFechaSolicitud($fechaSolicitud)
    {
        $this->fechaSolicitud = $fechaSolicitud;

        return $this;
    }

    /**
     * Get fechaSolicitud
     *
     * @return \DateTime 
     */
    public function getFechaSolicitud()
    {
        return $this->fechaSolicitud;
    }

    /**
     * Set metodoPago
     *
     * @param string $metodoPago
     * @return IcAnticipoDeGasto
     */
    public function setMetodoPago($metodoPago)
    {
        $this->metodoPago = $metodoPago;

        return $this;
    }

    /**
     * Get metodoPago
     *
     * @return string 
     */
    public function getMetodoPago()
    {
        return $this->metodoPago;
    }

    /**
     * Set numeroTarjeta
     *
     * @param string $numeroTarjeta
     * @return IcAnticipoDeGasto
     */
    public function setNumeroTarjeta($numeroTarjeta)
    {
        $this->numeroTarjeta = $numeroTarjeta;

        return $this;
    }

    /**
     * Get numeroTarjeta
     *
     * @return string 
     */
    public function getNumeroTarjeta()
    {
        return $this->numeroTarjeta;
    }

    /**
     * Set numeroCuenta
     *
     * @param string $numeroCuenta
     * @return IcAnticipoDeGasto
     */
    public function setNumeroCuenta($numeroCuenta)
    {
        $this->numeroCuenta = $numeroCuenta;

        return $this;
    }

    /**
     * Get numeroCuenta
     *
     * @return string 
     */
    public function getNumeroCuenta()
    {
        return $this->numeroCuenta;
    }

    /**
     * Set cuentaContable
     *
     * @param string $cuentaContable
     * @return IcAnticipoDeGasto
     */
    public function setCuentaContable($cuentaContable)
    {
        $this->cuentaContable = $cuentaContable;

        return $this;
    }

    /**
     * Get cuentaContable
     *
     * @return string 
     */
    public function getCuentaContable()
    {
        return $this->cuentaContable;
    }

    /**
     * Set numeroEmpleado
     *
     * @param string $numeroEmpleado
     * @return IcAnticipoDeGasto
     */
    public function setNumeroEmpleado($numeroEmpleado)
    {
        $this->numeroEmpleado = $numeroEmpleado;

        return $this;
    }

    /**
     * Get numeroEmpleado
     *
     * @return string 
     */
    public function getNumeroEmpleado()
    {
        return $this->numeroEmpleado;
    }

    /**
     * Set tipoMoneda
     *
     * @param string $tipoMoneda
     * @return IcAnticipoDeGasto
     */
    public function setTipoMoneda($tipoMoneda)
    {
        $this->tipoMoneda = $tipoMoneda;

        return $this;
    }

    /**
     * Get tipoMoneda
     *
     * @return string 
     */
    public function getTipoMoneda()
    {
        return $this->tipoMoneda;
    }

    /**
     * Set destinoDeViaje
     *
     * @param string $destinoDeViaje
     * @return IcAnticipoDeGasto
     */
    public function setDestinoDeViaje($destinoDeViaje)
    {
        $this->destinoDeViaje = $destinoDeViaje;

        return $this;
    }

    /**
     * Get destinoDeViaje
     *
     * @return string 
     */
    public function getDestinoDeViaje()
    {
        return $this->destinoDeViaje;
    }

    /**
     * Set fechaDesde
     *
     * @param \DateTime $fechaDesde
     * @return IcAnticipoDeGasto
     */
    public function setFechaDesde($fechaDesde)
    {
        $this->fechaDesde = $fechaDesde;

        return $this;
    }

    /**
     * Get fechaDesde
     *
     * @return \DateTime 
     */
    public function getFechaDesde()
    {
        return $this->fechaDesde;
    }

    /**
     * Set fechaHasta
     *
     * @param \DateTime $fechaHasta
     * @return IcAnticipoDeGasto
     */
    public function setFechaHasta($fechaHasta)
    {
        $this->fechaHasta = $fechaHasta;

        return $this;
    }

    /**
     * Get fechaHasta
     *
     * @return \DateTime 
     */
    public function getFechaHasta()
    {
        return $this->fechaHasta;
    }

    /**
     * Set motivoDelViaje
     *
     * @param string $motivoDelViaje
     * @return IcAnticipoDeGasto
     */
    public function setMotivoDelViaje($motivoDelViaje)
    {
        $this->motivoDelViaje = $motivoDelViaje;

        return $this;
    }

    /**
     * Get motivoDelViaje
     *
     * @return string 
     */
    public function getMotivoDelViaje()
    {
        return $this->motivoDelViaje;
    }

    /**
     * Set firmaSolicitante
     *
     * @param string $firmaSolicitante
     * @return IcAnticipoDeGasto
     */
    public function setFirmaSolicitante($firmaSolicitante)
    {
        $this->firmaSolicitante = $firmaSolicitante;

        return $this;
    }

    /**
     * Get firmaSolicitante
     *
     * @return string 
     */
    public function getFirmaSolicitante()
    {
        return $this->firmaSolicitante;
    }

    /**
     * Set firmaAutorizacion
     *
     * @param string $firmaAutorizacion
     * @return IcAnticipoDeGasto
     */
    public function setFirmaAutorizacion($firmaAutorizacion)
    {
        $this->firmaAutorizacion = $firmaAutorizacion;

        return $this;
    }

    /**
     * Get firmaAutorizacion
     *
     * @return string 
     */
    public function getFirmaAutorizacion()
    {
        return $this->firmaAutorizacion;
    }

    /**
     * Get idAnticipoDeGasto
     *
     * @return integer 
     */
    public function getIdAnticipoDeGasto()
    {
        return $this->idAnticipoDeGasto;
    }

    /**
     * Set idCentroTrabajo
     *
     * @param \IcFrontendBundle\Entity\IcCentroTrabajo $idCentroTrabajo
     * @return IcAnticipoDeGasto
     */
    public function setIdCentroTrabajo(\IcFrontendBundle\Entity\IcCentroTrabajo $idCentroTrabajo = null)
    {
        $this->idCentroTrabajo = $idCentroTrabajo;

        return $this;
    }

    /**
     * Get idCentroTrabajo
     *
     * @return \IcFrontendBundle\Entity\IcCentroTrabajo 
     */
    public function getIdCentroTrabajo()
    {
        return $this->idCentroTrabajo;
    }

    /**
     * Set idUsuarioSolicitante
     *
     * @param \IcFrontendBundle\Entity\IcUsuario $idUsuarioSolicitante
     * @return IcAnticipoDeGasto
     */
    public function setIdUsuarioSolicitante(\IcFrontendBundle\Entity\IcUsuario $idUsuarioSolicitante = null)
    {
        $this->idUsuarioSolicitante = $idUsuarioSolicitante;

        return $this;
    }

    /**
     * Get idUsuarioSolicitante
     *
     * @return \IcFrontendBundle\Entity\IcUsuario 
     */
    public function getIdUsuarioSolicitante()
    {
        return $this->idUsuarioSolicitante;
    }
}
