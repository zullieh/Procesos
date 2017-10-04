<?php

namespace IcFrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IcComprobacionDeGasto
 */
class IcComprobacionDeGasto
{
    /**
     * @var \DateTime
     */
    private $fechaEntrega;

    /**
     * @var string
     */
    private $folioComprobacion;

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
    private $idComprobacionDeGasto;

    /**
     * @var \IcFrontendBundle\Entity\IcCentroTrabajo
     */
    private $idCentroTrabajo;

    /**
     * @var \IcFrontendBundle\Entity\IcUsuario
     */
    private $idUsuarioSolicitante;

    /**
     * @var \IcFrontendBundle\Entity\IcAnticipoDeGasto
     */
    private $idAnticipoDeGastoFolio;


    /**
     * Set fechaEntrega
     *
     * @param \DateTime $fechaEntrega
     * @return IcComprobacionDeGasto
     */
    public function setFechaEntrega($fechaEntrega)
    {
        $this->fechaEntrega = $fechaEntrega;

        return $this;
    }

    /**
     * Get fechaEntrega
     *
     * @return \DateTime 
     */
    public function getFechaEntrega()
    {
        return $this->fechaEntrega;
    }

    /**
     * Set folioComprobacion
     *
     * @param string $folioComprobacion
     * @return IcComprobacionDeGasto
     */
    public function setFolioComprobacion($folioComprobacion)
    {
        $this->folioComprobacion = $folioComprobacion;

        return $this;
    }

    /**
     * Get folioComprobacion
     *
     * @return string 
     */
    public function getFolioComprobacion()
    {
        return $this->folioComprobacion;
    }

    /**
     * Set numeroEmpleado
     *
     * @param string $numeroEmpleado
     * @return IcComprobacionDeGasto
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
     * @return IcComprobacionDeGasto
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
     * @return IcComprobacionDeGasto
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
     * @return IcComprobacionDeGasto
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
     * @return IcComprobacionDeGasto
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
     * @return IcComprobacionDeGasto
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
     * @return IcComprobacionDeGasto
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
     * @return IcComprobacionDeGasto
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
     * @return IcComprobacionDeGasto
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
     * Get idComprobacionDeGasto
     *
     * @return integer 
     */
    public function getIdComprobacionDeGasto()
    {
        return $this->idComprobacionDeGasto;
    }

    /**
     * Set idCentroTrabajo
     *
     * @param \IcFrontendBundle\Entity\IcCentroTrabajo $idCentroTrabajo
     * @return IcComprobacionDeGasto
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
     * @return IcComprobacionDeGasto
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

    /**
     * Set idAnticipoDeGastoFolio
     *
     * @param \IcFrontendBundle\Entity\IcAnticipoDeGasto $idAnticipoDeGastoFolio
     * @return IcComprobacionDeGasto
     */
    public function setIdAnticipoDeGastoFolio(\IcFrontendBundle\Entity\IcAnticipoDeGasto $idAnticipoDeGastoFolio = null)
    {
        $this->idAnticipoDeGastoFolio = $idAnticipoDeGastoFolio;

        return $this;
    }

    /**
     * Get idAnticipoDeGastoFolio
     *
     * @return \IcFrontendBundle\Entity\IcAnticipoDeGasto 
     */
    public function getIdAnticipoDeGastoFolio()
    {
        return $this->idAnticipoDeGastoFolio;
    }
}
