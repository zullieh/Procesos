<?php

namespace IcBackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IcUsuario
 *
 * @ORM\Table(name="ic_usuario", indexes={@ORM\Index(name="IDX_989974E442B686", columns={"id_centro"}), @ORM\Index(name="IDX_989974E473B102B2", columns={"id_direccion"}), @ORM\Index(name="IDX_989974E43E83D982", columns={"id_gerencia"}), @ORM\Index(name="IDX_989974E45CB4216A", columns={"id_area"}), @ORM\Index(name="IDX_989974E461F46733", columns={"id_puesto"}), @ORM\Index(name="IDX_989974E4CE25AE0A", columns={"id_categoria"}), @ORM\Index(name="IDX_989974E4F9BECC66", columns={"id_subcategoria"})})
 * @ORM\Entity
 */
class IcUsuario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_usuario", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ic_usuario_id_usuario_seq", allocationSize=1, initialValue=1)
     */
    private $idUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=250, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido", type="string", length=250, nullable=true)
     */
    private $apellido;

    /**
     * @var string
     *
     * @ORM\Column(name="correo", type="string", length=250, nullable=true)
     */
    private $correo;

    /**
     * @var string
     *
     * @ORM\Column(name="contrasena", type="string", length=250, nullable=true)
     */
    private $contrasena;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_inicio", type="date", nullable=true)
     */
    private $fechaInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_modificacion", type="date", nullable=true)
     */
    private $fechaModificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=15, nullable=true)
     */
    private $telefono;

    /**
     * @var \IcCentroTrabajo
     *
     * @ORM\ManyToOne(targetEntity="IcCentroTrabajo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_centro", referencedColumnName="id_centro")
     * })
     */
    private $idCentro;

    /**
     * @var \IcDireccion
     *
     * @ORM\ManyToOne(targetEntity="IcDireccion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_direccion", referencedColumnName="id_direccion")
     * })
     */
    private $idDireccion;

    /**
     * @var \IcGerencia
     *
     * @ORM\ManyToOne(targetEntity="IcGerencia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_gerencia", referencedColumnName="id_gerencia")
     * })
     */
    private $idGerencia;

    /**
     * @var \IcArea
     *
     * @ORM\ManyToOne(targetEntity="IcArea")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_area", referencedColumnName="id_area")
     * })
     */
    private $idArea;

    /**
     * @var \IcPuesto
     *
     * @ORM\ManyToOne(targetEntity="IcPuesto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_puesto", referencedColumnName="id_puesto")
     * })
     */
    private $idPuesto;

    /**
     * @var \IcCategoria
     *
     * @ORM\ManyToOne(targetEntity="IcCategoria")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_categoria", referencedColumnName="id_categoria")
     * })
     */
    private $idCategoria;

    /**
     * @var \IcSubcategoria
     *
     * @ORM\ManyToOne(targetEntity="IcSubcategoria")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_subcategoria", referencedColumnName="id_subcategoria")
     * })
     */
    private $idSubcategoria;



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
     * Set idCentro
     *
     * @param \IcBackendBundle\Entity\IcCentroTrabajo $idCentro
     * @return IcUsuario
     */
    public function setIdCentro(\IcBackendBundle\Entity\IcCentroTrabajo $idCentro = null)
    {
        $this->idCentro = $idCentro;

        return $this;
    }

    /**
     * Get idCentro
     *
     * @return \IcBackendBundle\Entity\IcCentroTrabajo 
     */
    public function getIdCentro()
    {
        return $this->idCentro;
    }

    /**
     * Set idDireccion
     *
     * @param \IcBackendBundle\Entity\IcDireccion $idDireccion
     * @return IcUsuario
     */
    public function setIdDireccion(\IcBackendBundle\Entity\IcDireccion $idDireccion = null)
    {
        $this->idDireccion = $idDireccion;

        return $this;
    }

    /**
     * Get idDireccion
     *
     * @return \IcBackendBundle\Entity\IcDireccion 
     */
    public function getIdDireccion()
    {
        return $this->idDireccion;
    }

    /**
     * Set idGerencia
     *
     * @param \IcBackendBundle\Entity\IcGerencia $idGerencia
     * @return IcUsuario
     */
    public function setIdGerencia(\IcBackendBundle\Entity\IcGerencia $idGerencia = null)
    {
        $this->idGerencia = $idGerencia;

        return $this;
    }

    /**
     * Get idGerencia
     *
     * @return \IcBackendBundle\Entity\IcGerencia 
     */
    public function getIdGerencia()
    {
        return $this->idGerencia;
    }

    /**
     * Set idArea
     *
     * @param \IcBackendBundle\Entity\IcArea $idArea
     * @return IcUsuario
     */
    public function setIdArea(\IcBackendBundle\Entity\IcArea $idArea = null)
    {
        $this->idArea = $idArea;

        return $this;
    }

    /**
     * Get idArea
     *
     * @return \IcBackendBundle\Entity\IcArea 
     */
    public function getIdArea()
    {
        return $this->idArea;
    }

    /**
     * Set idPuesto
     *
     * @param \IcBackendBundle\Entity\IcPuesto $idPuesto
     * @return IcUsuario
     */
    public function setIdPuesto(\IcBackendBundle\Entity\IcPuesto $idPuesto = null)
    {
        $this->idPuesto = $idPuesto;

        return $this;
    }

    /**
     * Get idPuesto
     *
     * @return \IcBackendBundle\Entity\IcPuesto 
     */
    public function getIdPuesto()
    {
        return $this->idPuesto;
    }

    /**
     * Set idCategoria
     *
     * @param \IcBackendBundle\Entity\IcCategoria $idCategoria
     * @return IcUsuario
     */
    public function setIdCategoria(\IcBackendBundle\Entity\IcCategoria $idCategoria = null)
    {
        $this->idCategoria = $idCategoria;

        return $this;
    }

    /**
     * Get idCategoria
     *
     * @return \IcBackendBundle\Entity\IcCategoria 
     */
    public function getIdCategoria()
    {
        return $this->idCategoria;
    }

    /**
     * Set idSubcategoria
     *
     * @param \IcBackendBundle\Entity\IcSubcategoria $idSubcategoria
     * @return IcUsuario
     */
    public function setIdSubcategoria(\IcBackendBundle\Entity\IcSubcategoria $idSubcategoria = null)
    {
        $this->idSubcategoria = $idSubcategoria;

        return $this;
    }

    /**
     * Get idSubcategoria
     *
     * @return \IcBackendBundle\Entity\IcSubcategoria 
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
