<?php

namespace IcBackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IcCategoriaUsuario
 *
 * @ORM\Table(name="ic_categoria_usuario", indexes={@ORM\Index(name="IDX_9B03ACAFFCF8192D", columns={"id_usuario"})})
 * @ORM\Entity
 */
class IcCategoriaUsuario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_categoria_usuario", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ic_categoria_usuario_id_categoria_usuario_seq", allocationSize=1, initialValue=1)
     */
    private $idCategoriaUsuario;

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
     * Get idCategoriaUsuario
     *
     * @return integer 
     */
    public function getIdCategoriaUsuario()
    {
        return $this->idCategoriaUsuario;
    }

    /**
     * Set idCategoria
     *
     * @param integer $idCategoria
     * @return IcCategoriaUsuario
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
     * @return IcCategoriaUsuario
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
