<?php

namespace IcFrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IcRequisicionDeCompra
 */
class IcRequisicionDeCompra
{
    /**
     * @var string
     */
    private $folioRequisicion;

    /**
     * @var \DateTime
     */
    private $fechaSolicitud;

    /**
     * @var \DateTime
     */
    private $fechaEntrega;

    /**
     * @var boolean
     */
    private $status;

    /**
     * @var string
     */
    private $numeroEmpleado;

    /**
     * @var string
     */
    private $observaciones;

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
    private $descripcion;

    /**
     * @var string
     */
    private $codigoSku;

    /**
     * @var string
     */
    private $cantidad;

    /**
     * @var integer
     */
    private $idRequisicionDeCompra;

    /**
     * @var \IcFrontendBundle\Entity\IcCentroTrabajo
     */
    private $idCentroTrabajo;

    /**
     * @var \IcFrontendBundle\Entity\IcUsuario
     */
    private $idUsuarioSolicitante;


    /**
     * Set folioRequisicion
     *
     * @param string $folioRequisicion
     * @return IcRequisicionDeCompra
     */
    public function setFolioRequisicion($folioRequisicion)
    {
        $this->folioRequisicion = $folioRequisicion;

        return $this;
    }

    /**
     * Get folioRequisicion
     *
     * @return string 
     */
    public function getFolioRequisicion()
    {
        return $this->folioRequisicion;
    }

    /**
     * Set fechaSolicitud
     *
     * @param \DateTime $fechaSolicitud
     * @return IcRequisicionDeCompra
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
     * Set fechaEntrega
     *
     * @param \DateTime $fechaEntrega
     * @return IcRequisicionDeCompra
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
     * Set status
     *
     * @param boolean $status
     * @return IcRequisicionDeCompra
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set numeroEmpleado
     *
     * @param string $numeroEmpleado
     * @return IcRequisicionDeCompra
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
     * Set observaciones
     *
     * @param string $observaciones
     * @return IcRequisicionDeCompra
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
     * Set firmaSolicitante
     *
     * @param string $firmaSolicitante
     * @return IcRequisicionDeCompra
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
     * @return IcRequisicionDeCompra
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return IcRequisicionDeCompra
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set codigoSku
     *
     * @param string $codigoSku
     * @return IcRequisicionDeCompra
     */
    public function setCodigoSku($codigoSku)
    {
        $this->codigoSku = $codigoSku;

        return $this;
    }

    /**
     * Get codigoSku
     *
     * @return string 
     */
    public function getCodigoSku()
    {
        return $this->codigoSku;
    }

    /**
     * Set cantidad
     *
     * @param string $cantidad
     * @return IcRequisicionDeCompra
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
     * Get idRequisicionDeCompra
     *
     * @return integer 
     */
    public function getIdRequisicionDeCompra()
    {
        return $this->idRequisicionDeCompra;
    }

    /**
     * Set idCentroTrabajo
     *
     * @param \IcFrontendBundle\Entity\IcCentroTrabajo $idCentroTrabajo
     * @return IcRequisicionDeCompra
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
     * @return IcRequisicionDeCompra
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

    public function __toString()
    {

     return $this->folioRequisicion;

    }
}
