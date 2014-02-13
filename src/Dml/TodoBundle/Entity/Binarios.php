<?php

namespace Dml\TodoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Binarios
 *
 * @ORM\Table(name="BINARIOS", indexes={@ORM\Index(name="fk_binarios_persona1_idx", columns={"persona_pe_id"}), @ORM\Index(name="fk_binarios_contrato_ip1_idx", columns={"contrato_ip_cip_id"}), @ORM\Index(name="fk_binarios_pagos1_idx", columns={"pagos_pa_id"}), @ORM\Index(name="fk_binarios_hijos1_idx", columns={"hijos_hi_id"}), @ORM\Index(name="fk_binarios_enfermedades1_idx", columns={"enfermedades_en_id"}), @ORM\Index(name="fk_binarios_tarjetas_cd1_idx", columns={"tarjetas_cd_tcd_id"})})
 * @ORM\Entity(repositoryClass="Dml\TodoBundle\Entity\BinariosRepository")
 */
class Binarios
{
    /**
     * @var integer
     *
     * @ORM\Column(name="bi_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $biId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="bi_fecha_ingreso", type="date", nullable=true)
     */
    private $biFechaIngreso;

    /**
     * @var string
     *
     * @ORM\Column(name="bi_nombre", type="string", length=100, nullable=true)
     */
    private $biNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="bi_tamanio_bytes", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $biTamanioBytes;

    /**
     * @var string
     *
     * @ORM\Column(name="bi_bin", type="blob", nullable=true)
     */
    private $biBin;

    /**
     * @var string
     *
     * @ORM\Column(name="bi_ext", type="string", length=100, nullable=true)
     */
    private $biExt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="bi_fecha_crea", type="datetime", nullable=true)
     */
    private $biFechaCrea;

    /**
     * @var integer
     *
     * @ORM\Column(name="bi_quien_crea", type="integer", nullable=true)
     */
    private $biQuienCrea;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="bi_fecha_modifica", type="datetime", nullable=true)
     */
    private $biFechaModifica;

    /**
     * @var integer
     *
     * @ORM\Column(name="bi_quien_modifica", type="integer", nullable=true)
     */
    private $biQuienModifica;

    /**
     * @var boolean
     *
     * @ORM\Column(name="bi_borrado_logico", type="boolean", nullable=true)
     */
    private $biBorradoLogico;

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
     * @var \Dml\TodoBundle\Entity\ContratoIp
     *
     * @ORM\ManyToOne(targetEntity="Dml\TodoBundle\Entity\ContratoIp")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="contrato_ip_cip_id", referencedColumnName="cip_id")
     * })
     */
    private $contratoIpCip;

    /**
     * @var \Dml\TodoBundle\Entity\Pagos
     *
     * @ORM\ManyToOne(targetEntity="Dml\TodoBundle\Entity\Pagos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pagos_pa_id", referencedColumnName="pa_id")
     * })
     */
    private $pagosPa;

    /**
     * @var \Dml\TodoBundle\Entity\Hijos
     *
     * @ORM\ManyToOne(targetEntity="Dml\TodoBundle\Entity\Hijos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="hijos_hi_id", referencedColumnName="hi_id")
     * })
     */
    private $hijosHi;

    /**
     * @var \Dml\TodoBundle\Entity\Enfermedades
     *
     * @ORM\ManyToOne(targetEntity="Dml\TodoBundle\Entity\Enfermedades")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="enfermedades_en_id", referencedColumnName="en_id")
     * })
     */
    private $enfermedadesEn;

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
     * Get biId
     *
     * @return integer 
     */
    public function getBiId()
    {
        return $this->biId;
    }

    /**
     * Set biFechaIngreso
     *
     * @param \DateTime $biFechaIngreso
     * @return Binarios
     */
    public function setBiFechaIngreso($biFechaIngreso)
    {
        $this->biFechaIngreso = $biFechaIngreso;
    
        return $this;
    }

    /**
     * Get biFechaIngreso
     *
     * @return \DateTime 
     */
    public function getBiFechaIngreso()
    {
        return $this->biFechaIngreso;
    }

    /**
     * Set biNombre
     *
     * @param string $biNombre
     * @return Binarios
     */
    public function setBiNombre($biNombre)
    {
        $this->biNombre = $biNombre;
    
        return $this;
    }

    /**
     * Get biNombre
     *
     * @return string 
     */
    public function getBiNombre()
    {
        return $this->biNombre;
    }

    /**
     * Set biTamanioBytes
     *
     * @param string $biTamanioBytes
     * @return Binarios
     */
    public function setBiTamanioBytes($biTamanioBytes)
    {
        $this->biTamanioBytes = $biTamanioBytes;
    
        return $this;
    }

    /**
     * Get biTamanioBytes
     *
     * @return string 
     */
    public function getBiTamanioBytes()
    {
        return $this->biTamanioBytes;
    }

    /**
     * Set biBin
     *
     * @param string $biBin
     * @return Binarios
     */
    public function setBiBin($biBin)
    {
        $this->biBin = $biBin;
    
        return $this;
    }

    /**
     * Get biBin
     *
     * @return string 
     */
    public function getBiBin()
    {
        return $this->biBin;
    }

    /**
     * Set biExt
     *
     * @param string $biExt
     * @return Binarios
     */
    public function setBiExt($biExt)
    {
        $this->biExt = $biExt;
    
        return $this;
    }

    /**
     * Get biExt
     *
     * @return string 
     */
    public function getBiExt()
    {
        return $this->biExt;
    }

    /**
     * Set biFechaCrea
     *
     * @param \DateTime $biFechaCrea
     * @return Binarios
     */
    public function setBiFechaCrea($biFechaCrea)
    {
        $this->biFechaCrea = $biFechaCrea;
    
        return $this;
    }

    /**
     * Get biFechaCrea
     *
     * @return \DateTime 
     */
    public function getBiFechaCrea()
    {
        return $this->biFechaCrea;
    }

    /**
     * Set biQuienCrea
     *
     * @param integer $biQuienCrea
     * @return Binarios
     */
    public function setBiQuienCrea($biQuienCrea)
    {
        $this->biQuienCrea = $biQuienCrea;
    
        return $this;
    }

    /**
     * Get biQuienCrea
     *
     * @return integer 
     */
    public function getBiQuienCrea()
    {
        return $this->biQuienCrea;
    }

    /**
     * Set biFechaModifica
     *
     * @param \DateTime $biFechaModifica
     * @return Binarios
     */
    public function setBiFechaModifica($biFechaModifica)
    {
        $this->biFechaModifica = $biFechaModifica;
    
        return $this;
    }

    /**
     * Get biFechaModifica
     *
     * @return \DateTime 
     */
    public function getBiFechaModifica()
    {
        return $this->biFechaModifica;
    }

    /**
     * Set biQuienModifica
     *
     * @param integer $biQuienModifica
     * @return Binarios
     */
    public function setBiQuienModifica($biQuienModifica)
    {
        $this->biQuienModifica = $biQuienModifica;
    
        return $this;
    }

    /**
     * Get biQuienModifica
     *
     * @return integer 
     */
    public function getBiQuienModifica()
    {
        return $this->biQuienModifica;
    }

    /**
     * Set biBorradoLogico
     *
     * @param boolean $biBorradoLogico
     * @return Binarios
     */
    public function setBiBorradoLogico($biBorradoLogico)
    {
        $this->biBorradoLogico = $biBorradoLogico;
    
        return $this;
    }

    /**
     * Get biBorradoLogico
     *
     * @return boolean 
     */
    public function getBiBorradoLogico()
    {
        return $this->biBorradoLogico;
    }

    /**
     * Set personaPe
     *
     * @param \Dml\TodoBundle\Entity\Persona $personaPe
     * @return Binarios
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
     * Set contratoIpCip
     *
     * @param \Dml\TodoBundle\Entity\ContratoIp $contratoIpCip
     * @return Binarios
     */
    public function setContratoIpCip(\Dml\TodoBundle\Entity\ContratoIp $contratoIpCip = null)
    {
        $this->contratoIpCip = $contratoIpCip;
    
        return $this;
    }

    /**
     * Get contratoIpCip
     *
     * @return \Dml\TodoBundle\Entity\ContratoIp 
     */
    public function getContratoIpCip()
    {
        return $this->contratoIpCip;
    }

    /**
     * Set pagosPa
     *
     * @param \Dml\TodoBundle\Entity\Pagos $pagosPa
     * @return Binarios
     */
    public function setPagosPa(\Dml\TodoBundle\Entity\Pagos $pagosPa = null)
    {
        $this->pagosPa = $pagosPa;
    
        return $this;
    }

    /**
     * Get pagosPa
     *
     * @return \Dml\TodoBundle\Entity\Pagos 
     */
    public function getPagosPa()
    {
        return $this->pagosPa;
    }

    /**
     * Set hijosHi
     *
     * @param \Dml\TodoBundle\Entity\Hijos $hijosHi
     * @return Binarios
     */
    public function setHijosHi(\Dml\TodoBundle\Entity\Hijos $hijosHi = null)
    {
        $this->hijosHi = $hijosHi;
    
        return $this;
    }

    /**
     * Get hijosHi
     *
     * @return \Dml\TodoBundle\Entity\Hijos 
     */
    public function getHijosHi()
    {
        return $this->hijosHi;
    }

    /**
     * Set enfermedadesEn
     *
     * @param \Dml\TodoBundle\Entity\Enfermedades $enfermedadesEn
     * @return Binarios
     */
    public function setEnfermedadesEn(\Dml\TodoBundle\Entity\Enfermedades $enfermedadesEn = null)
    {
        $this->enfermedadesEn = $enfermedadesEn;
    
        return $this;
    }

    /**
     * Get enfermedadesEn
     *
     * @return \Dml\TodoBundle\Entity\Enfermedades 
     */
    public function getEnfermedadesEn()
    {
        return $this->enfermedadesEn;
    }

    /**
     * Set tarjetasCdTcd
     *
     * @param \Dml\TodoBundle\Entity\TarjetasCd $tarjetasCdTcd
     * @return Binarios
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
