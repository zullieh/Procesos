<?php

namespace IcFrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IcReembolsoDeGasto
 */
class IcReembolsoDeGasto
{
    /**
     * @var \DateTime
     */
    private $fechaSolicitud;

    /**
     * @var string
     */
    private $folioReembolso;

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
    private $numeroEmpleado;

    /**
     * @var string
     */
    private $firmaSolicitante;

    /**
     * @var string
     */
    private $firmaAutorizacion;

    /**
     * @var string
     */
    private $observaciones;

    /**
     * @var string
     */
    private $cuenta;

    /**
     * @var string
     */
    private $concepto;

    /**
     * @var string
     */
    private $importe;

    /**
     * @var string
     */
    private $iva;

    /**
     * @var string
     */
    private $total;

    /**
     * @var integer
     */
    private $idReembolsoGasto;

    /**
     * @var \IcFrontendBundle\Entity\IcCentroTrabajo
     */
    private $idCentroTrabajo;

    /**
     * @var \IcFrontendBundle\Entity\IcUsuario
     */
    private $idUsuarioSolicitante;


    /**
     * Set fechaSolicitud
     *
     * @param \DateTime $fechaSolicitud
     * @return IcReembolsoDeGasto
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
     * Set folioReembolso
     *
     * @param string $folioReembolso
     * @return IcReembolsoDeGasto
     */
    public function setFolioReembolso($folioReembolso)
    {
        $this->folioReembolso = $folioReembolso;

        return $this;
    }

    /**
     * Get folioReembolso
     *
     * @return string 
     */
    public function getFolioReembolso()
    {
        return $this->folioReembolso;
    }

    /**
     * Set metodoPago
     *
     * @param string $metodoPago
     * @return IcReembolsoDeGasto
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
     * @return IcReembolsoDeGasto
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
     * Set numeroEmpleado
     *
     * @param string $numeroEmpleado
     * @return IcReembolsoDeGasto
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
     * Set firmaSolicitante
     *
     * @param string $firmaSolicitante
     * @return IcReembolsoDeGasto
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
     * @return IcReembolsoDeGasto
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
     * Set observaciones
     *
     * @param string $observaciones
     * @return IcReembolsoDeGasto
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string 
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set cuenta
     *
     * @param string $cuenta
     * @return IcReembolsoDeGasto
     */
    public function setCuenta($cuenta)
    {
        $this->cuenta = $cuenta;

        return $this;
    }

    /**
     * Get cuenta
     *
     * @return string 
     */
    public function getCuenta()
    {
        return $this->cuenta;
    }

    /**
     * Set concepto
     *
     * @param string $concepto
     * @return IcReembolsoDeGasto
     */
    public function setConcepto($concepto)
    {
        $this->concepto = $concepto;

        return $this;
    }

    /**
     * Get concepto
     *
     * @return string 
     */
    public function getConcepto()
    {
        return $this->concepto;
    }

    /**
     * Set importe
     *
     * @param string $importe
     * @return IcReembolsoDeGasto
     */
    public function setImporte($importe)
    {
        $this->importe = $importe;

        return $this;
    }

    /**
     * Get importe
     *
     * @return string 
     */
    public function getImporte()
    {
        return $this->importe;
    }

    /**
     * Set iva
     *
     * @param string $iva
     * @return IcReembolsoDeGasto
     */
    public function setIva($iva)
    {
        $this->iva = $iva;

        return $this;
    }

    /**
     * Get iva
     *
     * @return string 
     */
    public function getIva()
    {
        return $this->iva;
    }

    /**
     * Set total
     *
     * @param string $total
     * @return IcReembolsoDeGasto
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return string 
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Get idReembolsoGasto
     *
     * @return integer 
     */
    public function getIdReembolsoGasto()
    {
        return $this->idReembolsoGasto;
    }

    /**
     * Set idCentroTrabajo
     *
     * @param \IcFrontendBundle\Entity\IcCentroTrabajo $idCentroTrabajo
     * @return IcReembolsoDeGasto
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
     * @return IcReembolsoDeGasto
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
