<?php

namespace Dml\TodoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pagos
 *
 * @ORM\Table(name="PAGOS", indexes={@ORM\Index(name="fk_pagos_persona1_idx", columns={"persona_pe_id"}), @ORM\Index(name="fk_pagos_tipo_consumo1_idx", columns={"tipo_consumo_tc_id"})})
 * @ORM\Entity(repositoryClass="Dml\TodoBundle\Entity\Repositories\PagosRepository")
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
     * @var \DateTime
     *
     * @ORM\Column(name="pa_fecha_crea", type="datetime", nullable=true)
     */
    private $paFechaCrea;

    /**
     * @var integer
     *
     * @ORM\Column(name="pa_quien_crea", type="integer", nullable=true)
     */
    private $paQuienCrea;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pa_fecha_modifica", type="datetime", nullable=true)
     */
    private $paFechaModifica;

    /**
     * @var integer
     *
     * @ORM\Column(name="pa_quien_modifica", type="integer", nullable=true)
     */
    private $paQuienModifica;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pa_fecha_borrado", type="datetime", nullable=true)
     */
    private $paFechaBorrado;

    /**
     * @var integer
     *
     * @ORM\Column(name="pa_quien_borra", type="integer", nullable=true)
     */
    private $paQuienBorra;

    /**
     * @var boolean
     *
     * @ORM\Column(name="pa_borrado_logico", type="boolean", nullable=true)
     */
    private $paBorradoLogico;

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
     * Set paFechaCrea
     *
     * @param \DateTime $paFechaCrea
     * @return Pagos
     */
    public function setPaFechaCrea($paFechaCrea)
    {
        $this->paFechaCrea = $paFechaCrea;
    
        return $this;
    }

    /**
     * Get paFechaCrea
     *
     * @return \DateTime 
     */
    public function getPaFechaCrea()
    {
        return $this->paFechaCrea;
    }

    /**
     * Set paQuienCrea
     *
     * @param integer $paQuienCrea
     * @return Pagos
     */
    public function setPaQuienCrea($paQuienCrea)
    {
        $this->paQuienCrea = $paQuienCrea;
    
        return $this;
    }

    /**
     * Get paQuienCrea
     *
     * @return integer 
     */
    public function getPaQuienCrea()
    {
        return $this->paQuienCrea;
    }

    /**
     * Set paFechaModifica
     *
     * @param \DateTime $paFechaModifica
     * @return Pagos
     */
    public function setPaFechaModifica($paFechaModifica)
    {
        $this->paFechaModifica = $paFechaModifica;
    
        return $this;
    }

    /**
     * Get paFechaModifica
     *
     * @return \DateTime 
     */
    public function getPaFechaModifica()
    {
        return $this->paFechaModifica;
    }

    /**
     * Set paQuienModifica
     *
     * @param integer $paQuienModifica
     * @return Pagos
     */
    public function setPaQuienModifica($paQuienModifica)
    {
        $this->paQuienModifica = $paQuienModifica;
    
        return $this;
    }

    /**
     * Get paQuienModifica
     *
     * @return integer 
     */
    public function getPaQuienModifica()
    {
        return $this->paQuienModifica;
    }

    /**
     * Set paFechaBorrado
     *
     * @param \DateTime $paFechaBorrado
     * @return Pagos
     */
    public function setPaFechaBorrado($paFechaBorrado)
    {
        $this->paFechaBorrado = $paFechaBorrado;
    
        return $this;
    }

    /**
     * Get paFechaBorrado
     *
     * @return \DateTime 
     */
    public function getPaFechaBorrado()
    {
        return $this->paFechaBorrado;
    }

    /**
     * Set paQuienBorra
     *
     * @param integer $paQuienBorra
     * @return Pagos
     */
    public function setPaQuienBorra($paQuienBorra)
    {
        $this->paQuienBorra = $paQuienBorra;
    
        return $this;
    }

    /**
     * Get paQuienBorra
     *
     * @return integer 
     */
    public function getPaQuienBorra()
    {
        return $this->paQuienBorra;
    }

    /**
     * Set paBorradoLogico
     *
     * @param boolean $paBorradoLogico
     * @return Pagos
     */
    public function setPaBorradoLogico($paBorradoLogico)
    {
        $this->paBorradoLogico = $paBorradoLogico;
    
        return $this;
    }

    /**
     * Get paBorradoLogico
     *
     * @return boolean 
     */
    public function getPaBorradoLogico()
    {
        return $this->paBorradoLogico;
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
