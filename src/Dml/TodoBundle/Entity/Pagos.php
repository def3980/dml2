<?php

namespace Dml\TodoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pagos
 *
 * @ORM\Table(name="PAGOS", indexes={@ORM\Index(name="fk_pagos_persona1_idx", columns={"persona_pe_id"}), @ORM\Index(name="fk_pagos_tipo_consumo1_idx", columns={"tipo_consumo_tc_id"})})
 * @ORM\Entity(repositoryClass="Dml\TodoBundle\Entity\PagosRepository")
 */
class Pagos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="pa_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $paId;

    /**
     * @var string
     *
     * @ORM\Column(name="pa_numero_factura", type="string", length=17, nullable=true)
     */
    private $paNumeroFactura;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pa_fecha", type="datetime", nullable=true)
     */
    private $paFecha;

    /**
     * @var string
     *
     * @ORM\Column(name="pa_detalle", type="text", nullable=true)
     */
    private $paDetalle;

    /**
     * @var string
     *
     * @ORM\Column(name="pa_iva", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $paIva;

    /**
     * @var string
     *
     * @ORM\Column(name="pa_ice", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $paIce;

    /**
     * @var string
     *
     * @ORM\Column(name="pa_comision", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $paComision;

    /**
     * @var string
     *
     * @ORM\Column(name="pa_valor_total", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $paValorTotal;

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
     * @var \Dml\TodoBundle\Entity\TipoConsumo
     *
     * @ORM\ManyToOne(targetEntity="Dml\TodoBundle\Entity\TipoConsumo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipo_consumo_tc_id", referencedColumnName="tc_id")
     * })
     */
    private $tipoConsumoTc;



    /**
     * Get paId
     *
     * @return integer 
     */
    public function getPaId()
    {
        return $this->paId;
    }

    /**
     * Set paNumeroFactura
     *
     * @param string $paNumeroFactura
     * @return Pagos
     */
    public function setPaNumeroFactura($paNumeroFactura)
    {
        $this->paNumeroFactura = $paNumeroFactura;
    
        return $this;
    }

    /**
     * Get paNumeroFactura
     *
     * @return string 
     */
    public function getPaNumeroFactura()
    {
        return $this->paNumeroFactura;
    }

    /**
     * Set paFecha
     *
     * @param \DateTime $paFecha
     * @return Pagos
     */
    public function setPaFecha($paFecha)
    {
        $this->paFecha = $paFecha;
    
        return $this;
    }

    /**
     * Get paFecha
     *
     * @return \DateTime 
     */
    public function getPaFecha()
    {
        return $this->paFecha;
    }

    /**
     * Set paDetalle
     *
     * @param string $paDetalle
     * @return Pagos
     */
    public function setPaDetalle($paDetalle)
    {
        $this->paDetalle = $paDetalle;
    
        return $this;
    }

    /**
     * Get paDetalle
     *
     * @return string 
     */
    public function getPaDetalle()
    {
        return $this->paDetalle;
    }

    /**
     * Set paIva
     *
     * @param string $paIva
     * @return Pagos
     */
    public function setPaIva($paIva)
    {
        $this->paIva = $paIva;
    
        return $this;
    }

    /**
     * Get paIva
     *
     * @return string 
     */
    public function getPaIva()
    {
        return $this->paIva;
    }

    /**
     * Set paIce
     *
     * @param string $paIce
     * @return Pagos
     */
    public function setPaIce($paIce)
    {
        $this->paIce = $paIce;
    
        return $this;
    }

    /**
     * Get paIce
     *
     * @return string 
     */
    public function getPaIce()
    {
        return $this->paIce;
    }

    /**
     * Set paComision
     *
     * @param string $paComision
     * @return Pagos
     */
    public function setPaComision($paComision)
    {
        $this->paComision = $paComision;
    
        return $this;
    }

    /**
     * Get paComision
     *
     * @return string 
     */
    public function getPaComision()
    {
        return $this->paComision;
    }

    /**
     * Set paValorTotal
     *
     * @param string $paValorTotal
     * @return Pagos
     */
    public function setPaValorTotal($paValorTotal)
    {
        $this->paValorTotal = $paValorTotal;
    
        return $this;
    }

    /**
     * Get paValorTotal
     *
     * @return string 
     */
    public function getPaValorTotal()
    {
        return $this->paValorTotal;
    }

    /**
     * Set personaPe
     *
     * @param \Dml\TodoBundle\Entity\Persona $personaPe
     * @return Pagos
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
     * Set tipoConsumoTc
     *
     * @param \Dml\TodoBundle\Entity\TipoConsumo $tipoConsumoTc
     * @return Pagos
     */
    public function setTipoConsumoTc(\Dml\TodoBundle\Entity\TipoConsumo $tipoConsumoTc = null)
    {
        $this->tipoConsumoTc = $tipoConsumoTc;
    
        return $this;
    }

    /**
     * Get tipoConsumoTc
     *
     * @return \Dml\TodoBundle\Entity\TipoConsumo 
     */
    public function getTipoConsumoTc()
    {
        return $this->tipoConsumoTc;
    }
}
