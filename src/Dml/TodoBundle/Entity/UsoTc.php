<?php

namespace Dml\TodoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsoTc
 *
 * @ORM\Table(name="USO_TC", indexes={@ORM\Index(name="fk_uso_tc_tarjetas_cd1_idx", columns={"tarjetas_cd_tcd_id"})})
 * @ORM\Entity(repositoryClass="Dml\TodoBundle\Entity\Repositories\UsoTcRepository")
 */
class UsoTc
{
    /**
     * @var integer
     *
     * @ORM\Column(name="utc_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $utcId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="utc_fecha", type="datetime", nullable=true)
     */
    private $utcFecha;

    /**
     * @var string
     *
     * @ORM\Column(name="utc_detalle", type="text", nullable=true)
     */
    private $utcDetalle;

    /**
     * @var string
     *
     * @ORM\Column(name="utc_valor_total", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $utcValorTotal;

    /**
     * @var boolean
     *
     * @ORM\Column(name="utc_pagado", type="boolean", nullable=true)
     */
    private $utcPagado;

    /**
     * @var \Dml\TodoBundle\Entity\TarjetasCd
     *
     * @ORM\ManyToOne(targetEntity="Dml\TodoBundle\Entity\TarjetasCd")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tarjetas_cd_tcd_id", referencedColumnName="tcd_id")
     * })
     */
    private $tarjetasCdTcd;



    /**
     * Get utcId
     *
     * @return integer 
     */
    public function getUtcId()
    {
        return $this->utcId;
    }

    /**
     * Set utcFecha
     *
     * @param \DateTime $utcFecha
     * @return UsoTc
     */
    public function setUtcFecha($utcFecha)
    {
        $this->utcFecha = $utcFecha;
    
        return $this;
    }

    /**
     * Get utcFecha
     *
     * @return \DateTime 
     */
    public function getUtcFecha()
    {
        return $this->utcFecha;
    }

    /**
     * Set utcDetalle
     *
     * @param string $utcDetalle
     * @return UsoTc
     */
    public function setUtcDetalle($utcDetalle)
    {
        $this->utcDetalle = $utcDetalle;
    
        return $this;
    }

    /**
     * Get utcDetalle
     *
     * @return string 
     */
    public function getUtcDetalle()
    {
        return $this->utcDetalle;
    }

    /**
     * Set utcValorTotal
     *
     * @param string $utcValorTotal
     * @return UsoTc
     */
    public function setUtcValorTotal($utcValorTotal)
    {
        $this->utcValorTotal = $utcValorTotal;
    
        return $this;
    }

    /**
     * Get utcValorTotal
     *
     * @return string 
     */
    public function getUtcValorTotal()
    {
        return $this->utcValorTotal;
    }

    /**
     * Set utcPagado
     *
     * @param boolean $utcPagado
     * @return UsoTc
     */
    public function setUtcPagado($utcPagado)
    {
        $this->utcPagado = $utcPagado;
    
        return $this;
    }

    /**
     * Get utcPagado
     *
     * @return boolean 
     */
    public function getUtcPagado()
    {
        return $this->utcPagado;
    }

    /**
     * Set tarjetasCdTcd
     *
     * @param \Dml\TodoBundle\Entity\TarjetasCd $tarjetasCdTcd
     * @return UsoTc
     */
    public function setTarjetasCdTcd(\Dml\TodoBundle\Entity\TarjetasCd $tarjetasCdTcd = null)
    {
        $this->tarjetasCdTcd = $tarjetasCdTcd;
    
        return $this;
    }

    /**
     * Get tarjetasCdTcd
     *
     * @return \Dml\TodoBundle\Entity\TarjetasCd 
     */
    public function getTarjetasCdTcd()
    {
        return $this->tarjetasCdTcd;
    }
}
