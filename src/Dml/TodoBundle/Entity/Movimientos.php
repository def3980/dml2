<?php

namespace Dml\TodoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Movimientos
 *
 * @ORM\Table(name="MOVIMIENTOS", indexes={@ORM\Index(name="fk_movimientos_ahorros1_idx", columns={"ahorros_ah_id"})})
 * @ORM\Entity(repositoryClass="Dml\TodoBundle\Entity\MovimientosRepository")
 */
class Movimientos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="mo_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $moId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mo_fecha", type="date", nullable=true)
     */
    private $moFecha;

    /**
     * @var string
     *
     * @ORM\Column(name="mo_concepto", type="string", length=100, nullable=true)
     */
    private $moConcepto;

    /**
     * @var string
     *
     * @ORM\Column(name="mo_tipo", type="string", length=1, nullable=true)
     */
    private $moTipo;

    /**
     * @var string
     *
     * @ORM\Column(name="mo_documento", type="string", length=10, nullable=true)
     */
    private $moDocumento;

    /**
     * @var string
     *
     * @ORM\Column(name="mo_oficina", type="string", length=100, nullable=true)
     */
    private $moOficina;

    /**
     * @var string
     *
     * @ORM\Column(name="mo_monto", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $moMonto;

    /**
     * @var string
     *
     * @ORM\Column(name="mo_saldo", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $moSaldo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mo_fecha_crea", type="datetime", nullable=true)
     */
    private $moFechaCrea;

    /**
     * @var integer
     *
     * @ORM\Column(name="mo_quien_crea", type="integer", nullable=true)
     */
    private $moQuienCrea;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mo_fecha_modifica", type="datetime", nullable=true)
     */
    private $moFechaModifica;

    /**
     * @var integer
     *
     * @ORM\Column(name="mo_quien_modifica", type="integer", nullable=true)
     */
    private $moQuienModifica;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mo_fecha_borrado", type="datetime", nullable=true)
     */
    private $moFechaBorrado;

    /**
     * @var integer
     *
     * @ORM\Column(name="mo_quien_borra", type="integer", nullable=true)
     */
    private $moQuienBorra;

    /**
     * @var boolean
     *
     * @ORM\Column(name="mo_borrado_logico", type="boolean", nullable=true)
     */
    private $moBorradoLogico;

    /**
     * @var \Dml\TodoBundle\Entity\Ahorros
     *
     * @ORM\ManyToOne(targetEntity="Dml\TodoBundle\Entity\Ahorros")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ahorros_ah_id", referencedColumnName="ah_id")
     * })
     */
    private $ahorrosAh;



    /**
     * Get moId
     *
     * @return integer 
     */
    public function getMoId()
    {
        return $this->moId;
    }

    /**
     * Set moFecha
     *
     * @param \DateTime $moFecha
     * @return Movimientos
     */
    public function setMoFecha($moFecha)
    {
        $this->moFecha = $moFecha;
    
        return $this;
    }

    /**
     * Get moFecha
     *
     * @return \DateTime 
     */
    public function getMoFecha()
    {
        return $this->moFecha;
    }

    /**
     * Set moConcepto
     *
     * @param string $moConcepto
     * @return Movimientos
     */
    public function setMoConcepto($moConcepto)
    {
        $this->moConcepto = $moConcepto;
    
        return $this;
    }

    /**
     * Get moConcepto
     *
     * @return string 
     */
    public function getMoConcepto()
    {
        return $this->moConcepto;
    }

    /**
     * Set moTipo
     *
     * @param string $moTipo
     * @return Movimientos
     */
    public function setMoTipo($moTipo)
    {
        $this->moTipo = $moTipo;
    
        return $this;
    }

    /**
     * Get moTipo
     *
     * @return string 
     */
    public function getMoTipo()
    {
        return $this->moTipo;
    }

    /**
     * Set moDocumento
     *
     * @param string $moDocumento
     * @return Movimientos
     */
    public function setMoDocumento($moDocumento)
    {
        $this->moDocumento = $moDocumento;
    
        return $this;
    }

    /**
     * Get moDocumento
     *
     * @return string 
     */
    public function getMoDocumento()
    {
        return $this->moDocumento;
    }

    /**
     * Set moOficina
     *
     * @param string $moOficina
     * @return Movimientos
     */
    public function setMoOficina($moOficina)
    {
        $this->moOficina = $moOficina;
    
        return $this;
    }

    /**
     * Get moOficina
     *
     * @return string 
     */
    public function getMoOficina()
    {
        return $this->moOficina;
    }

    /**
     * Set moMonto
     *
     * @param string $moMonto
     * @return Movimientos
     */
    public function setMoMonto($moMonto)
    {
        $this->moMonto = $moMonto;
    
        return $this;
    }

    /**
     * Get moMonto
     *
     * @return string 
     */
    public function getMoMonto()
    {
        return $this->moMonto;
    }

    /**
     * Set moSaldo
     *
     * @param string $moSaldo
     * @return Movimientos
     */
    public function setMoSaldo($moSaldo)
    {
        $this->moSaldo = $moSaldo;
    
        return $this;
    }

    /**
     * Get moSaldo
     *
     * @return string 
     */
    public function getMoSaldo()
    {
        return $this->moSaldo;
    }

    /**
     * Set moFechaCrea
     *
     * @param \DateTime $moFechaCrea
     * @return Movimientos
     */
    public function setMoFechaCrea($moFechaCrea)
    {
        $this->moFechaCrea = $moFechaCrea;
    
        return $this;
    }

    /**
     * Get moFechaCrea
     *
     * @return \DateTime 
     */
    public function getMoFechaCrea()
    {
        return $this->moFechaCrea;
    }

    /**
     * Set moQuienCrea
     *
     * @param integer $moQuienCrea
     * @return Movimientos
     */
    public function setMoQuienCrea($moQuienCrea)
    {
        $this->moQuienCrea = $moQuienCrea;
    
        return $this;
    }

    /**
     * Get moQuienCrea
     *
     * @return integer 
     */
    public function getMoQuienCrea()
    {
        return $this->moQuienCrea;
    }

    /**
     * Set moFechaModifica
     *
     * @param \DateTime $moFechaModifica
     * @return Movimientos
     */
    public function setMoFechaModifica($moFechaModifica)
    {
        $this->moFechaModifica = $moFechaModifica;
    
        return $this;
    }

    /**
     * Get moFechaModifica
     *
     * @return \DateTime 
     */
    public function getMoFechaModifica()
    {
        return $this->moFechaModifica;
    }

    /**
     * Set moQuienModifica
     *
     * @param integer $moQuienModifica
     * @return Movimientos
     */
    public function setMoQuienModifica($moQuienModifica)
    {
        $this->moQuienModifica = $moQuienModifica;
    
        return $this;
    }

    /**
     * Get moQuienModifica
     *
     * @return integer 
     */
    public function getMoQuienModifica()
    {
        return $this->moQuienModifica;
    }

    /**
     * Set moFechaBorrado
     *
     * @param \DateTime $moFechaBorrado
     * @return Movimientos
     */
    public function setMoFechaBorrado($moFechaBorrado)
    {
        $this->moFechaBorrado = $moFechaBorrado;
    
        return $this;
    }

    /**
     * Get moFechaBorrado
     *
     * @return \DateTime 
     */
    public function getMoFechaBorrado()
    {
        return $this->moFechaBorrado;
    }

    /**
     * Set moQuienBorra
     *
     * @param integer $moQuienBorra
     * @return Movimientos
     */
    public function setMoQuienBorra($moQuienBorra)
    {
        $this->moQuienBorra = $moQuienBorra;
    
        return $this;
    }

    /**
     * Get moQuienBorra
     *
     * @return integer 
     */
    public function getMoQuienBorra()
    {
        return $this->moQuienBorra;
    }

    /**
     * Set moBorradoLogico
     *
     * @param boolean $moBorradoLogico
     * @return Movimientos
     */
    public function setMoBorradoLogico($moBorradoLogico)
    {
        $this->moBorradoLogico = $moBorradoLogico;
    
        return $this;
    }

    /**
     * Get moBorradoLogico
     *
     * @return boolean 
     */
    public function getMoBorradoLogico()
    {
        return $this->moBorradoLogico;
    }

    /**
     * Set ahorrosAh
     *
     * @param \Dml\TodoBundle\Entity\Ahorros $ahorrosAh
     * @return Movimientos
     */
    public function setAhorrosAh(\Dml\TodoBundle\Entity\Ahorros $ahorrosAh = null)
    {
        $this->ahorrosAh = $ahorrosAh;
    
        return $this;
    }

    /**
     * Get ahorrosAh
     *
     * @return \Dml\TodoBundle\Entity\Ahorros 
     */
    public function getAhorrosAh()
    {
        return $this->ahorrosAh;
    }
}
