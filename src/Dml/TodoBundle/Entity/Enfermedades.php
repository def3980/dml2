<?php

namespace Dml\TodoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Enfermedades
 *
 * @ORM\Table(name="ENFERMEDADES", indexes={@ORM\Index(name="fk_enfermedades_hijos1_idx", columns={"hijos_hi_id"})})
 * @ORM\Entity(repositoryClass="Dml\TodoBundle\Entity\Repositories\EnfermedadesRepository")
 */
class Enfermedades
{
    /**
     * @var integer
     *
     * @ORM\Column(name="en_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $enId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="en_fecha", type="date", nullable=true)
     */
    private $enFecha;

    /**
     * @var string
     *
     * @ORM\Column(name="en_nombre", type="string", length=100, nullable=true)
     */
    private $enNombre;

    /**
     * @var \Dml\TodoBundle\Entity\Hijos
     *
     * @ORM\ManyToOne(targetEntity="Dml\TodoBundle\Entity\Hijos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="hijos_hi_id", referencedColumnName="hi_id")
     * })
     */
    private $hijosHi;



    /**
     * Get enId
     *
     * @return integer 
     */
    public function getEnId()
    {
        return $this->enId;
    }

    /**
     * Set enFecha
     *
     * @param \DateTime $enFecha
     * @return Enfermedades
     */
    public function setEnFecha($enFecha)
    {
        $this->enFecha = $enFecha;
    
        return $this;
    }

    /**
     * Get enFecha
     *
     * @return \DateTime 
     */
    public function getEnFecha()
    {
        return $this->enFecha;
    }

    /**
     * Set enNombre
     *
     * @param string $enNombre
     * @return Enfermedades
     */
    public function setEnNombre($enNombre)
    {
        $this->enNombre = $enNombre;
    
        return $this;
    }

    /**
     * Get enNombre
     *
     * @return string 
     */
    public function getEnNombre()
    {
        return $this->enNombre;
    }

    /**
     * Set hijosHi
     *
     * @param \Dml\TodoBundle\Entity\Hijos $hijosHi
     * @return Enfermedades
     */
    public function setHijosHi(\Dml\TodoBundle\Entity\Hijos $hijosHi = null)
    {
        $this->hijosHi = $hijosHi;
    
        return $this;
    }

    /**
     * Get hijosHi
     *
     * @return \Dml\TodoBundle\Entity\Hijos 
     */
    public function getHijosHi()
    {
        return $this->hijosHi;
    }
}
