<?php

namespace Dml\TodoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContratarB
 *
 * @ORM\Table(name="CONTRATAR_B", indexes={@ORM\Index(name="fk_contratar_b_persona1_idx", columns={"persona_pe_id"}), @ORM\Index(name="fk_contratar_b_entidad_sbbip1_idx", columns={"entidad_sbbip_es_id"})})
 * @ORM\Entity(repositoryClass="Dml\TodoBundle\Entity\ContratarBRepository")
 */
class ContratarB
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cb_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cbId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cb_fecha_contrato", type="date", nullable=true)
     */
    private $cbFechaContrato;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cb_fecha_crea", type="datetime", nullable=true)
     */
    private $cbFechaCrea;

    /**
     * @var integer
     *
     * @ORM\Column(name="cb_quien_crea", type="integer", nullable=true)
     */
    private $cbQuienCrea;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cb_fecha_modifica", type="datetime", nullable=true)
     */
    private $cbFechaModifica;

    /**
     * @var integer
     *
     * @ORM\Column(name="cb_quien_modifica", type="integer", nullable=true)
     */
    private $cbQuienModifica;

    /**
     * @var boolean
     *
     * @ORM\Column(name="cb_borrado_logico", type="boolean", nullable=true)
     */
    private $cbBorradoLogico;

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
     * @var \Dml\TodoBundle\Entity\EntidadSbbip
     *
     * @ORM\ManyToOne(targetEntity="Dml\TodoBundle\Entity\EntidadSbbip")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="entidad_sbbip_es_id", referencedColumnName="es_id")
     * })
     */
    private $entidadSbbipEs;



    /**
     * Get cbId
     *
     * @return integer 
     */
    public function getCbId()
    {
        return $this->cbId;
    }

    /**
     * Set cbFechaContrato
     *
     * @param \DateTime $cbFechaContrato
     * @return ContratarB
     */
    public function setCbFechaContrato($cbFechaContrato)
    {
        $this->cbFechaContrato = $cbFechaContrato;
    
        return $this;
    }

    /**
     * Get cbFechaContrato
     *
     * @return \DateTime 
     */
    public function getCbFechaContrato()
    {
        return $this->cbFechaContrato;
    }

    /**
     * Set cbFechaCrea
     *
     * @param \DateTime $cbFechaCrea
     * @return ContratarB
     */
    public function setCbFechaCrea($cbFechaCrea)
    {
        $this->cbFechaCrea = $cbFechaCrea;
    
        return $this;
    }

    /**
     * Get cbFechaCrea
     *
     * @return \DateTime 
     */
    public function getCbFechaCrea()
    {
        return $this->cbFechaCrea;
    }

    /**
     * Set cbQuienCrea
     *
     * @param integer $cbQuienCrea
     * @return ContratarB
     */
    public function setCbQuienCrea($cbQuienCrea)
    {
        $this->cbQuienCrea = $cbQuienCrea;
    
        return $this;
    }

    /**
     * Get cbQuienCrea
     *
     * @return integer 
     */
    public function getCbQuienCrea()
    {
        return $this->cbQuienCrea;
    }

    /**
     * Set cbFechaModifica
     *
     * @param \DateTime $cbFechaModifica
     * @return ContratarB
     */
    public function setCbFechaModifica($cbFechaModifica)
    {
        $this->cbFechaModifica = $cbFechaModifica;
    
        return $this;
    }

    /**
     * Get cbFechaModifica
     *
     * @return \DateTime 
     */
    public function getCbFechaModifica()
    {
        return $this->cbFechaModifica;
    }

    /**
     * Set cbQuienModifica
     *
     * @param integer $cbQuienModifica
     * @return ContratarB
     */
    public function setCbQuienModifica($cbQuienModifica)
    {
        $this->cbQuienModifica = $cbQuienModifica;
    
        return $this;
    }

    /**
     * Get cbQuienModifica
     *
     * @return integer 
     */
    public function getCbQuienModifica()
    {
        return $this->cbQuienModifica;
    }

    /**
     * Set cbBorradoLogico
     *
     * @param boolean $cbBorradoLogico
     * @return ContratarB
     */
    public function setCbBorradoLogico($cbBorradoLogico)
    {
        $this->cbBorradoLogico = $cbBorradoLogico;
    
        return $this;
    }

    /**
     * Get cbBorradoLogico
     *
     * @return boolean 
     */
    public function getCbBorradoLogico()
    {
        return $this->cbBorradoLogico;
    }

    /**
     * Set personaPe
     *
     * @param \Dml\TodoBundle\Entity\Persona $personaPe
     * @return ContratarB
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
     * Set entidadSbbipEs
     *
     * @param \Dml\TodoBundle\Entity\EntidadSbbip $entidadSbbipEs
     * @return ContratarB
     */
    public function setEntidadSbbipEs(\Dml\TodoBundle\Entity\EntidadSbbip $entidadSbbipEs = null)
    {
        $this->entidadSbbipEs = $entidadSbbipEs;
    
        return $this;
    }

    /**
     * Get entidadSbbipEs
     *
     * @return \Dml\TodoBundle\Entity\EntidadSbbip 
     */
    public function getEntidadSbbipEs()
    {
        return $this->entidadSbbipEs;
    }
}
