<?php

namespace IcBackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IcSubcategoriaUsuario
 *
 * @ORM\Table(name="ic_subcategoria_usuario", indexes={@ORM\Index(name="IDX_4B29738AFCF8192D", columns={"id_usuario"})})
 * @ORM\Entity
 */
class IcSubcategoriaUsuario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_subcategoria_usuario", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ic_subcategoria_usuario_id_subcategoria_usuario_seq", allocationSize=1, initialValue=1)
     */
    private $idSubcategoriaUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="cantidad", type="string", length=10, nullable=true)
     */
    private $cantidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_categoria", type="integer", nullable=true)
     */
    private $idCategoria;

    /**
     * @var \IcUsuario
     *
     * @ORM\ManyToOne(targetEntity="IcUsuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_usuario", referencedColumnName="id_usuario")
     * })
     */
    private $idUsuario;



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
     * Set idUsuario
     *
     * @param \IcBackendBundle\Entity\IcUsuario $idUsuario
     * @return IcSubcategoriaUsuario
     */
    public function setIdUsuario(\IcBackendBundle\Entity\IcUsuario $idUsuario = null)
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }

    /**
     * Get idUsuario
     *
     * @return \IcBackendBundle\Entity\IcUsuario 
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }
}
