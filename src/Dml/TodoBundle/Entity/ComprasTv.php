<?php

namespace Dml\TodoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ComprasTv
 *
 * @ORM\Table(name="COMPRAS_TV", indexes={@ORM\Index(name="fk_compras_tv_registro_tv1_idx", columns={"registro_tv_rtv_id"})})
 * @ORM\Entity(repositoryClass="Dml\TodoBundle\Entity\ComprasTvRepository")
 */
class ComprasTv
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ctv_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ctvId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ctv_fecha", type="date", nullable=true)
     */
    private $ctvFecha;

    /**
     * @var string
     *
     * @ORM\Column(name="ctv_numero_orden", type="string", length=20, nullable=true)
     */
    private $ctvNumeroOrden;

    /**
     * @var string
     *
     * @ORM\Column(name="ctv_entrega_manejo", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $ctvEntregaManejo;

    /**
     * @var string
     *
     * @ORM\Column(name="ctv_taxes", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $ctvTaxes;

    /**
     * @var \Dml\TodoBundle\Entity\RegistroTv
     *
     * @ORM\ManyToOne(targetEntity="Dml\TodoBundle\Entity\RegistroTv")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="registro_tv_rtv_id", referencedColumnName="rtv_id")
     * })
     */
    private $registroTvRtv;



    /**
     * Get ctvId
     *
     * @return integer 
     */
    public function getCtvId()
    {
        return $this->ctvId;
    }

    /**
     * Set ctvFecha
     *
     * @param \DateTime $ctvFecha
     * @return ComprasTv
     */
    public function setCtvFecha($ctvFecha)
    {
        $this->ctvFecha = $ctvFecha;
    
        return $this;
    }

    /**
     * Get ctvFecha
     *
     * @return \DateTime 
     */
    public function getCtvFecha()
    {
        return $this->ctvFecha;
    }

    /**
     * Set ctvNumeroOrden
     *
     * @param string $ctvNumeroOrden
     * @return ComprasTv
     */
    public function setCtvNumeroOrden($ctvNumeroOrden)
    {
        $this->ctvNumeroOrden = $ctvNumeroOrden;
    
        return $this;
    }

    /**
     * Get ctvNumeroOrden
     *
     * @return string 
     */
    public function getCtvNumeroOrden()
    {
        return $this->ctvNumeroOrden;
    }

    /**
     * Set ctvEntregaManejo
     *
     * @param string $ctvEntregaManejo
     * @return ComprasTv
     */
    public function setCtvEntregaManejo($ctvEntregaManejo)
    {
        $this->ctvEntregaManejo = $ctvEntregaManejo;
    
        return $this;
    }

    /**
     * Get ctvEntregaManejo
     *
     * @return string 
     */
    public function getCtvEntregaManejo()
    {
        return $this->ctvEntregaManejo;
    }

    /**
     * Set ctvTaxes
     *
     * @param string $ctvTaxes
     * @return ComprasTv
     */
    public function setCtvTaxes($ctvTaxes)
    {
        $this->ctvTaxes = $ctvTaxes;
    
        return $this;
    }

    /**
     * Get ctvTaxes
     *
     * @return string 
     */
    public function getCtvTaxes()
    {
        return $this->ctvTaxes;
    }

    /**
     * Set registroTvRtv
     *
     * @param \Dml\TodoBundle\Entity\RegistroTv $registroTvRtv
     * @return ComprasTv
     */
    public function setRegistroTvRtv(\Dml\TodoBundle\Entity\RegistroTv $registroTvRtv = null)
    {
        $this->registroTvRtv = $registroTvRtv;
    
        return $this;
    }

    /**
     * Get registroTvRtv
     *
     * @return \Dml\TodoBundle\Entity\RegistroTv 
     */
    public function getRegistroTvRtv()
    {
        return $this->registroTvRtv;
    }
}
