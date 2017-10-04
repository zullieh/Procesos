<?php

namespace IcBackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IcSubcategoria
 *
 * @ORM\Table(name="ic_subcategoria", indexes={@ORM\Index(name="IDX_9C7366A6CE25AE0A", columns={"id_categoria"})})
 * @ORM\Entity
 */
class IcSubcategoria
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_subcategoria", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ic_subcategoria_id_subcategoria_seq", allocationSize=1, initialValue=1)
     */
    private $idSubcategoria;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=250, nullable=true)
     */
    private $nombre;

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
     * Get idSubcategoria
     *
     * @return integer 
     */
    public function getIdSubcategoria()
    {
        return $this->idSubcategoria;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return IcSubcategoria
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
     * Set idCategoria
     *
     * @param \IcBackendBundle\Entity\IcCategoria $idCategoria
     * @return IcSubcategoria
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

    public function __toString()
    {

     return $this->nombre;
        // TODO: Implement __toString() method.
    }
}
