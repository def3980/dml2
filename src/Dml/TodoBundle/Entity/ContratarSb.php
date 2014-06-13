<?php

namespace Dml\TodoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContratarSb
 *
 * @ORM\Table(name="CONTRATAR_SB", indexes={@ORM\Index(name="fk_contratar_sb_persona1_idx", columns={"persona_pe_id"}), @ORM\Index(name="fk_contratar_sb_entidades1_idx", columns={"entidades_es_id"})})
 * @ORM\Entity(repositoryClass="Dml\TodoBundle\Entity\Repositories\ContratarSbRepository")
 */
class ContratarSb
{
    /**
     * @var integer
     *
     * @ORM\Column(name="csb_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $csbId;

    /**
     * @var string
     *
     * @ORM\Column(name="csb_identificacion", type="string", length=50, nullable=true)
     */
    private $csbIdentificacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="csb_fecha", type="date", nullable=true)
     */
    private $csbFecha;

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
     * @var \Dml\TodoBundle\Entity\Entidades
     *
     * @ORM\ManyToOne(targetEntity="Dml\TodoBundle\Entity\Entidades")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="entidades_es_id", referencedColumnName="es_id")
     * })
     */
    private $entidadesEs;



    /**
     * Get csbId
     *
     * @return integer 
     */
    public function getCsbId()
    {
        return $this->csbId;
    }

    /**
     * Set csbIdentificacion
     *
     * @param string $csbIdentificacion
     * @return ContratarSb
     */
    public function setCsbIdentificacion($csbIdentificacion)
    {
        $this->csbIdentificacion = $csbIdentificacion;

        return $this;
    }

    /**
     * Get csbIdentificacion
     *
     * @return string 
     */
    public function getCsbIdentificacion()
    {
        return $this->csbIdentificacion;
    }

    /**
     * Set csbFecha
     *
     * @param \DateTime $csbFecha
     * @return ContratarSb
     */
    public function setCsbFecha($csbFecha)
    {
        $this->csbFecha = $csbFecha;

        return $this;
    }

    /**
     * Get csbFecha
     *
     * @return \DateTime 
     */
    public function getCsbFecha()
    {
        return $this->csbFecha;
    }

    /**
     * Set personaPe
     *
     * @param \Dml\TodoBundle\Entity\Persona $personaPe
     * @return ContratarSb
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

    /**
     * Set entidadesEs
     *
     * @param \Dml\TodoBundle\Entity\Entidades $entidadesEs
     * @return ContratarSb
     */
    public function setEntidadesEs(\Dml\TodoBundle\Entity\Entidades $entidadesEs = null)
    {
        $this->entidadesEs = $entidadesEs;

        return $this;
    }

    /**
     * Get entidadesEs
     *
     * @return \Dml\TodoBundle\Entity\Entidades 
     */
    public function getEntidadesEs()
    {
        return $this->entidadesEs;
    }
}
