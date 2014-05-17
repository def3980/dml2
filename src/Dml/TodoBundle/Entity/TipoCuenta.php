<?php

namespace Dml\TodoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoCuenta
 *
 * @ORM\Table(name="TIPO_CUENTA")
 * @ORM\Entity(repositoryClass="Dml\TodoBundle\Entity\Repositories\TipoCuentaRepository")
 */
class TipoCuenta
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tc_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tcId;

    /**
     * @var string
     *
     * @ORM\Column(name="tc_nombre", type="string", length=100, nullable=true)
     */
    private $tcNombre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tc_fecha_crea", type="datetime", nullable=true)
     */
    private $tcFechaCrea;

    /**
     * @var integer
     *
     * @ORM\Column(name="tc_quien_crea", type="integer", nullable=true)
     */
    private $tcQuienCrea;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tc_fecha_modifica", type="datetime", nullable=true)
     */
    private $tcFechaModifica;

    /**
     * @var integer
     *
     * @ORM\Column(name="tc_quien_modifica", type="integer", nullable=true)
     */
    private $tcQuienModifica;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tc_fecha_borrado", type="datetime", nullable=true)
     */
    private $tcFechaBorrado;

    /**
     * @var integer
     *
     * @ORM\Column(name="tc_quien_borra", type="integer", nullable=true)
     */
    private $tcQuienBorra;

    /**
     * @var boolean
     *
     * @ORM\Column(name="tc_borrado_logico", type="boolean", nullable=true)
     */
    private $tcBorradoLogico;



    /**
     * Get tcId
     *
     * @return integer 
     */
    public function getTcId()
    {
        return $this->tcId;
    }

    /**
     * Set tcNombre
     *
     * @param string $tcNombre
     * @return TipoCuenta
     */
    public function setTcNombre($tcNombre)
    {
        $this->tcNombre = $tcNombre;
    
        return $this;
    }

    /**
     * Get tcNombre
     *
     * @return string 
     */
    public function getTcNombre()
    {
        return $this->tcNombre;
    }

    /**
     * Set tcFechaCrea
     *
     * @param \DateTime $tcFechaCrea
     * @return TipoCuenta
     */
    public function setTcFechaCrea($tcFechaCrea)
    {
        $this->tcFechaCrea = $tcFechaCrea;
    
        return $this;
    }

    /**
     * Get tcFechaCrea
     *
     * @return \DateTime 
     */
    public function getTcFechaCrea()
    {
        return $this->tcFechaCrea;
    }

    /**
     * Set tcQuienCrea
     *
     * @param integer $tcQuienCrea
     * @return TipoCuenta
     */
    public function setTcQuienCrea($tcQuienCrea)
    {
        $this->tcQuienCrea = $tcQuienCrea;
    
        return $this;
    }

    /**
     * Get tcQuienCrea
     *
     * @return integer 
     */
    public function getTcQuienCrea()
    {
        return $this->tcQuienCrea;
    }

    /**
     * Set tcFechaModifica
     *
     * @param \DateTime $tcFechaModifica
     * @return TipoCuenta
     */
    public function setTcFechaModifica($tcFechaModifica)
    {
        $this->tcFechaModifica = $tcFechaModifica;
    
        return $this;
    }

    /**
     * Get tcFechaModifica
     *
     * @return \DateTime 
     */
    public function getTcFechaModifica()
    {
        return $this->tcFechaModifica;
    }

    /**
     * Set tcQuienModifica
     *
     * @param integer $tcQuienModifica
     * @return TipoCuenta
     */
    public function setTcQuienModifica($tcQuienModifica)
    {
        $this->tcQuienModifica = $tcQuienModifica;
    
        return $this;
    }

    /**
     * Get tcQuienModifica
     *
     * @return integer 
     */
    public function getTcQuienModifica()
    {
        return $this->tcQuienModifica;
    }

    /**
     * Set tcFechaBorrado
     *
     * @param \DateTime $tcFechaBorrado
     * @return TipoCuenta
     */
    public function setTcFechaBorrado($tcFechaBorrado)
    {
        $this->tcFechaBorrado = $tcFechaBorrado;
    
        return $this;
    }

    /**
     * Get tcFechaBorrado
     *
     * @return \DateTime 
     */
    public function getTcFechaBorrado()
    {
        return $this->tcFechaBorrado;
    }

    /**
     * Set tcQuienBorra
     *
     * @param integer $tcQuienBorra
     * @return TipoCuenta
     */
    public function setTcQuienBorra($tcQuienBorra)
    {
        $this->tcQuienBorra = $tcQuienBorra;
    
        return $this;
    }

    /**
     * Get tcQuienBorra
     *
     * @return integer 
     */
    public function getTcQuienBorra()
    {
        return $this->tcQuienBorra;
    }

    /**
     * Set tcBorradoLogico
     *
     * @param boolean $tcBorradoLogico
     * @return TipoCuenta
     */
    public function setTcBorradoLogico($tcBorradoLogico)
    {
        $this->tcBorradoLogico = $tcBorradoLogico;
    
        return $this;
    }

    /**
     * Get tcBorradoLogico
     *
     * @return boolean 
     */
    public function getTcBorradoLogico()
    {
        return $this->tcBorradoLogico;
    }
}
