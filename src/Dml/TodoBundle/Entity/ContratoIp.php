<?php

namespace Dml\TodoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContratoIp
 *
 * @ORM\Table(name="CONTRATO_IP", indexes={@ORM\Index(name="fk_contrato_ip_persona1_idx", columns={"persona_pe_id"}), @ORM\Index(name="fk_contrato_ip_entidad_sbbip1_idx", columns={"entidad_sbbip_es_id"}), @ORM\Index(name="fk_contrato_ip_remuneracion1_idx", columns={"remuneracion_re_id"})})
 * @ORM\Entity(repositoryClass="Dml\TodoBundle\Entity\ContratoIpRepository")
 */
class ContratoIp
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cip_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cipId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cip_fecha_ingreso", type="date", nullable=true)
     */
    private $cipFechaIngreso;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cip_fecha_salida", type="date", nullable=true)
     */
    private $cipFechaSalida;

    /**
     * @var string
     *
     * @ORM\Column(name="cip_motivos_salida", type="text", nullable=true)
     */
    private $cipMotivosSalida;

    /**
     * @var string
     *
     * @ORM\Column(name="cip_actividad_desarrollada", type="string", length=100, nullable=true)
     */
    private $cipActividadDesarrollada;

    /**
     * @var boolean
     *
     * @ORM\Column(name="cip_activo", type="boolean", nullable=true)
     */
    private $cipActivo;

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
     * @var \Dml\TodoBundle\Entity\Remuneracion
     *
     * @ORM\ManyToOne(targetEntity="Dml\TodoBundle\Entity\Remuneracion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="remuneracion_re_id", referencedColumnName="re_id")
     * })
     */
    private $remuneracionRe;



    /**
     * Get cipId
     *
     * @return integer 
     */
    public function getCipId()
    {
        return $this->cipId;
    }

    /**
     * Set cipFechaIngreso
     *
     * @param \DateTime $cipFechaIngreso
     * @return ContratoIp
     */
    public function setCipFechaIngreso($cipFechaIngreso)
    {
        $this->cipFechaIngreso = $cipFechaIngreso;
    
        return $this;
    }

    /**
     * Get cipFechaIngreso
     *
     * @return \DateTime 
     */
    public function getCipFechaIngreso()
    {
        return $this->cipFechaIngreso;
    }

    /**
     * Set cipFechaSalida
     *
     * @param \DateTime $cipFechaSalida
     * @return ContratoIp
     */
    public function setCipFechaSalida($cipFechaSalida)
    {
        $this->cipFechaSalida = $cipFechaSalida;
    
        return $this;
    }

    /**
     * Get cipFechaSalida
     *
     * @return \DateTime 
     */
    public function getCipFechaSalida()
    {
        return $this->cipFechaSalida;
    }

    /**
     * Set cipMotivosSalida
     *
     * @param string $cipMotivosSalida
     * @return ContratoIp
     */
    public function setCipMotivosSalida($cipMotivosSalida)
    {
        $this->cipMotivosSalida = $cipMotivosSalida;
    
        return $this;
    }

    /**
     * Get cipMotivosSalida
     *
     * @return string 
     */
    public function getCipMotivosSalida()
    {
        return $this->cipMotivosSalida;
    }

    /**
     * Set cipActividadDesarrollada
     *
     * @param string $cipActividadDesarrollada
     * @return ContratoIp
     */
    public function setCipActividadDesarrollada($cipActividadDesarrollada)
    {
        $this->cipActividadDesarrollada = $cipActividadDesarrollada;
    
        return $this;
    }

    /**
     * Get cipActividadDesarrollada
     *
     * @return string 
     */
    public function getCipActividadDesarrollada()
    {
        return $this->cipActividadDesarrollada;
    }

    /**
     * Set cipActivo
     *
     * @param boolean $cipActivo
     * @return ContratoIp
     */
    public function setCipActivo($cipActivo)
    {
        $this->cipActivo = $cipActivo;
    
        return $this;
    }

    /**
     * Get cipActivo
     *
     * @return boolean 
     */
    public function getCipActivo()
    {
        return $this->cipActivo;
    }

    /**
     * Set personaPe
     *
     * @param \Dml\TodoBundle\Entity\Persona $personaPe
     * @return ContratoIp
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
     * @return ContratoIp
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

    /**
     * Set remuneracionRe
     *
     * @param \Dml\TodoBundle\Entity\Remuneracion $remuneracionRe
     * @return ContratoIp
     */
    public function setRemuneracionRe(\Dml\TodoBundle\Entity\Remuneracion $remuneracionRe = null)
    {
        $this->remuneracionRe = $remuneracionRe;
    
        return $this;
    }

    /**
     * Get remuneracionRe
     *
     * @return \Dml\TodoBundle\Entity\Remuneracion 
     */
    public function getRemuneracionRe()
    {
        return $this->remuneracionRe;
    }
}
