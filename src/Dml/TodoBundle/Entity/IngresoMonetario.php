<?php

namespace Dml\TodoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IngresoMonetario
 *
 * @ORM\Table(name="INGRESO_MONETARIO", indexes={@ORM\Index(name="fk_ingreso_monetario_persona_idx", columns={"persona_pe_id"})})
 * @ORM\Entity(repositoryClass="Dml\TodoBundle\Entity\IngresoMonetarioRepository")
 */
class IngresoMonetario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="im_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $imId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="im_fecha", type="date", nullable=true)
     */
    private $imFecha;

    /**
     * @var string
     *
     * @ORM\Column(name="im_razon", type="text", nullable=true)
     */
    private $imRazon;

    /**
     * @var string
     *
     * @ORM\Column(name="im_valor", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $imValor;

    /**
     * @var \Dml\TodoBundle\Entity\Persona
     *
     * @ORM\ManyToOne(targetEntity="Dml\TodoBundle\Entity\Persona")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="persona_pe_id", referencedColumnName="pe_id")
     * })
     */
    private $personaPe;



    /**
     * Get imId
     *
     * @return integer 
     */
    public function getImId()
    {
        return $this->imId;
    }

    /**
     * Set imFecha
     *
     * @param \DateTime $imFecha
     * @return IngresoMonetario
     */
    public function setImFecha($imFecha)
    {
        $this->imFecha = $imFecha;
    
        return $this;
    }

    /**
     * Get imFecha
     *
     * @return \DateTime 
     */
    public function getImFecha()
    {
        return $this->imFecha;
    }

    /**
     * Set imRazon
     *
     * @param string $imRazon
     * @return IngresoMonetario
     */
    public function setImRazon($imRazon)
    {
        $this->imRazon = $imRazon;
    
        return $this;
    }

    /**
     * Get imRazon
     *
     * @return string 
     */
    public function getImRazon()
    {
        return $this->imRazon;
    }

    /**
     * Set imValor
     *
     * @param string $imValor
     * @return IngresoMonetario
     */
    public function setImValor($imValor)
    {
        $this->imValor = $imValor;
    
        return $this;
    }

    /**
     * Get imValor
     *
     * @return string 
     */
    public function getImValor()
    {
        return $this->imValor;
    }

    /**
     * Set personaPe
     *
     * @param \Dml\TodoBundle\Entity\Persona $personaPe
     * @return IngresoMonetario
     */
    public function setPersonaPe(\Dml\TodoBundle\Entity\Persona $personaPe = null)
    {
        $this->personaPe = $personaPe;
    
        return $this;
    }

    /**
     * Get personaPe
     *
     * @return \Dml\TodoBundle\Entity\Persona 
     */
    public function getPersonaPe()
    {
        return $this->personaPe;
    }
}
