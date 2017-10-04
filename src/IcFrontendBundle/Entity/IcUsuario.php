<?php

namespace IcFrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IcUsuario
 */
class IcUsuario
{
    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $apellido;

    /**
     * @var string
     */
    private $correo;

    /**
     * @var string
     */
    private $contrasena;

    /**
     * @var \DateTime
     */
    private $fechaInicio;

    /**
     * @var \DateTime
     */
    private $fechaModificacion;

    /**
     * @var string
     */
    private $telefono;

    /**
     * @var integer
     */
    private $idUsuario;

    /**
     * @var \IcFrontendBundle\Entity\IcCentroTrabajo
     */
    private $idCentro;

    /**
     * @var \IcFrontendBundle\Entity\IcDireccion
     */
    private $idDireccion;

    /**
     * @var \IcFrontendBundle\Entity\IcGerencia
     */
    private $idGerencia;

    /**
     * @var \IcFrontendBundle\Entity\IcArea
     */
    private $idArea;

    /**
     * @var \IcFrontendBundle\Entity\IcPuesto
     */
    private $idPuesto;

    /**
     * @var \IcFrontendBundle\Entity\IcCategoria
     */
    private $idCategoria;

    /**
     * @var \IcFrontendBundle\Entity\IcSubcategoria
     */
    private $idSubcategoria;


    /**
     * Set nombre
     *
     * @param string $nombre
     * @return IcUsuario
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
     * Set apellido
     *
     * @param string $apellido
     * @return IcUsuario
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string 
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set correo
     *
     * @param string $correo
     * @return IcUsuario
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;

        return $this;
    }

    /**
     * Get correo
     *
     * @return string 
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * Set contrasena
     *
     * @param string $contrasena
     * @return IcUsuario
     */
    public function setContrasena($contrasena)
    {
        $this->contrasena = $contrasena;

        return $this;
    }

    /**
     * Get contrasena
     *
     * @return string 
     */
    public function getContrasena()
    {
        return $this->contrasena;
    }

    /**
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     * @return IcUsuario
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return \DateTime 
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Set fechaModificacion
     *
     * @param \DateTime $fechaModificacion
     * @return IcUsuario
     */
    public function setFechaModificacion($fechaModificacion)
    {
        $this->fechaModificacion = $fechaModificacion;

        return $this;
    }

    /**
     * Get fechaModificacion
     *
     * @return \DateTime 
     */
    public function getFechaModificacion()
    {
        return $this->fechaModificacion;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return IcUsuario
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }


    /**
     * Get idUsuario
     *
     * @return integer 
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * Set idCentro
     *
     * @param \IcFrontendBundle\Entity\IcCentroTrabajo $idCentro
     * @return IcUsuario
     */
    public function setIdCentro(\IcFrontendBundle\Entity\IcCentroTrabajo $idCentro = null)
    {
        $this->idCentro = $idCentro;

        return $this;
    }

    /**
     * Get idCentro
     *
     * @return \IcFrontendBundle\Entity\IcCentroTrabajo 
     */
    public function getIdCentro()
    {
        return $this->idCentro;
    }

    /**
     * Set idDireccion
     *
     * @param \IcFrontendBundle\Entity\IcDireccion $idDireccion
     * @return IcUsuario
     */
    public function setIdDireccion(\IcFrontendBundle\Entity\IcDireccion $idDireccion = null)
    {
        $this->idDireccion = $idDireccion;

        return $this;
    }

    /**
     * Get idDireccion
     *
     * @return \IcFrontendBundle\Entity\IcDireccion 
     */
    public function getIdDireccion()
    {
        return $this->idDireccion;
    }

    /**
     * Set idGerencia
     *
     * @param \IcFrontendBundle\Entity\IcGerencia $idGerencia
     * @return IcUsuario
     */
    public function setIdGerencia(\IcFrontendBundle\Entity\IcGerencia $idGerencia = null)
    {
        $this->idGerencia = $idGerencia;

        return $this;
    }

    /**
     * Get idGerencia
     *
     * @return \IcFrontendBundle\Entity\IcGerencia 
     */
    public function getIdGerencia()
    {
        return $this->idGerencia;
    }

    /**
     * Set idArea
     *
     * @param \IcFrontendBundle\Entity\IcArea $idArea
     * @return IcUsuario
     */
    public function setIdArea(\IcFrontendBundle\Entity\IcArea $idArea = null)
    {
        $this->idArea = $idArea;

        return $this;
    }

    /**
     * Get idArea
     *
     * @return \IcFrontendBundle\Entity\IcArea 
     */
    public function getIdArea()
    {
        return $this->idArea;
    }

    /**
     * Set idPuesto
     *
     * @param \IcFrontendBundle\Entity\IcPuesto $idPuesto
     * @return IcUsuario
     */
    public function setIdPuesto(\IcFrontendBundle\Entity\IcPuesto $idPuesto = null)
    {
        $this->idPuesto = $idPuesto;

        return $this;
    }

    /**
     * Get idPuesto
     *
     * @return \IcFrontendBundle\Entity\IcPuesto 
     */
    public function getIdPuesto()
    {
        return $this->idPuesto;
    }

    /**
     * Set idCategoria
     *
     * @param \IcFrontendBundle\Entity\IcCategoria $idCategoria
     * @return IcUsuario
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

    /**
     * Set idSubcategoria
     *
     * @param \IcFrontendBundle\Entity\IcSubcategoria $idSubcategoria
     * @return IcUsuario
     */
    public function setIdSubcategoria(\IcFrontendBundle\Entity\IcSubcategoria $idSubcategoria = null)
    {
        $this->idSubcategoria = $idSubcategoria;

        return $this;
    }

    /**
     * Get idSubcategoria
     *
     * @return \IcFrontendBundle\Entity\IcSubcategoria 
     */
    public function getIdSubcategoria()
    {
        return $this->idSubcategoria;
    }

    public function __toString()
    {

        return $this->nombre;
        // TODO: Implement __toString() method.
    }


}
