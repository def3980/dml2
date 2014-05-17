<?php

namespace Dml\TodoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TarjetasCd
 *
 * @ORM\Table(name="TARJETAS_CD", indexes={@ORM\Index(name="fk_tarjetas_cd_contratar_b1_idx", columns={"contratar_b_cb_id"}), @ORM\Index(name="fk_tarjetas_cd_tipo_tcd1_idx", columns={"tipo_tcd_ttcd_id"})})
 * @ORM\Entity(repositoryClass="Dml\TodoBundle\Entity\Repositories\TarjetasCdRepository")
 */
class TarjetasCd
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tcd_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tcdId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tcd_fecha_emision", type="date", nullable=true)
     */
    private $tcdFechaEmision;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tcd_fecha_terminacion", type="date", nullable=true)
     */
    private $tcdFechaTerminacion;

    /**
     * @var string
     *
     * @ORM\Column(name="tcd_numero", type="string", length=16, nullable=true)
     */
    private $tcdNumero;

    /**
     * @var string
     *
     * @ORM\Column(name="tcd_cvv", type="string", length=3, nullable=true)
     */
    private $tcdCvv;

    /**
     * @var boolean
     *
     * @ORM\Column(name="tcd_estado", type="boolean", nullable=true)
     */
    private $tcdEstado;

    /**
     * @var \Dml\TodoBundle\Entity\ContratarB
     *
     * @ORM\ManyToOne(targetEntity="Dml\TodoBundle\Entity\ContratarB")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="contratar_b_cb_id", referencedColumnName="cb_id")
     * })
     */
    private $contratarBCb;

    /**
     * @var \Dml\TodoBundle\Entity\TipoTcd
     *
     * @ORM\ManyToOne(targetEntity="Dml\TodoBundle\Entity\TipoTcd")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipo_tcd_ttcd_id", referencedColumnName="ttcd_id")
     * })
     */
    private $tipoTcdTtcd;



    /**
     * Get tcdId
     *
     * @return integer 
     */
    public function getTcdId()
    {
        return $this->tcdId;
    }

    /**
     * Set tcdFechaEmision
     *
     * @param \DateTime $tcdFechaEmision
     * @return TarjetasCd
     */
    public function setTcdFechaEmision($tcdFechaEmision)
    {
        $this->tcdFechaEmision = $tcdFechaEmision;
    
        return $this;
    }

    /**
     * Get tcdFechaEmision
     *
     * @return \DateTime 
     */
    public function getTcdFechaEmision()
    {
        return $this->tcdFechaEmision;
    }

    /**
     * Set tcdFechaTerminacion
     *
     * @param \DateTime $tcdFechaTerminacion
     * @return TarjetasCd
     */
    public function setTcdFechaTerminacion($tcdFechaTerminacion)
    {
        $this->tcdFechaTerminacion = $tcdFechaTerminacion;
    
        return $this;
    }

    /**
     * Get tcdFechaTerminacion
     *
     * @return \DateTime 
     */
    public function getTcdFechaTerminacion()
    {
        return $this->tcdFechaTerminacion;
    }

    /**
     * Set tcdNumero
     *
     * @param string $tcdNumero
     * @return TarjetasCd
     */
    public function setTcdNumero($tcdNumero)
    {
        $this->tcdNumero = $tcdNumero;
    
        return $this;
    }

    /**
     * Get tcdNumero
     *
     * @return string 
     */
    public function getTcdNumero()
    {
        return $this->tcdNumero;
    }

    /**
     * Set tcdCvv
     *
     * @param string $tcdCvv
     * @return TarjetasCd
     */
    public function setTcdCvv($tcdCvv)
    {
        $this->tcdCvv = $tcdCvv;
    
        return $this;
    }

    /**
     * Get tcdCvv
     *
     * @return string 
     */
    public function getTcdCvv()
    {
        return $this->tcdCvv;
    }

    /**
     * Set tcdEstado
     *
     * @param boolean $tcdEstado
     * @return TarjetasCd
     */
    public function setTcdEstado($tcdEstado)
    {
        $this->tcdEstado = $tcdEstado;
    
        return $this;
    }

    /**
     * Get tcdEstado
     *
     * @return boolean 
     */
    public function getTcdEstado()
    {
        return $this->tcdEstado;
    }

    /**
     * Set contratarBCb
     *
     * @param \Dml\TodoBundle\Entity\ContratarB $contratarBCb
     * @return TarjetasCd
     */
    public function setContratarBCb(\Dml\TodoBundle\Entity\ContratarB $contratarBCb = null)
    {
        $this->contratarBCb = $contratarBCb;
    
        return $this;
    }

    /**
     * Get contratarBCb
     *
     * @return \Dml\TodoBundle\Entity\ContratarB 
     */
    public function getContratarBCb()
    {
        return $this->contratarBCb;
    }

    /**
     * Set tipoTcdTtcd
     *
     * @param \Dml\TodoBundle\Entity\TipoTcd $tipoTcdTtcd
     * @return TarjetasCd
     */
    public function setTipoTcdTtcd(\Dml\TodoBundle\Entity\TipoTcd $tipoTcdTtcd = null)
    {
        $this->tipoTcdTtcd = $tipoTcdTtcd;
    
        return $this;
    }

    /**
     * Get tipoTcdTtcd
     *
     * @return \Dml\TodoBundle\Entity\TipoTcd 
     */
    public function getTipoTcdTtcd()
    {
        return $this->tipoTcdTtcd;
    }
}
