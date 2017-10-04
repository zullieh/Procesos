<?php

namespace IcBackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IcPuesto
 *
 * @ORM\Table(name="ic_puesto", indexes={@ORM\Index(name="IDX_6B316E2A5CB4216A", columns={"id_area"})})
 * @ORM\Entity
 */
class IcPuesto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_puesto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ic_puesto_id_puesto_seq", allocationSize=1, initialValue=1)
     */
    private $idPuesto;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=250, nullable=true)
     */
    private $nombre;

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
     * Get idPuesto
     *
     * @return integer 
     */
    public function getIdPuesto()
    {
        return $this->idPuesto;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return IcPuesto
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
     * Set idArea
     *
     * @param \IcBackendBundle\Entity\IcArea $idArea
     * @return IcPuesto
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

    public function __toString()
    {

     return $this->nombre;
        // TODO: Implement __toString() method.
    }
}
