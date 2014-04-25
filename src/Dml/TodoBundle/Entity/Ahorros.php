<?php

namespace Dml\TodoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ahorros
 *
 * @ORM\Table(name="AHORROS", indexes={@ORM\Index(name="fk_ahorrros_contratar_b1_idx", columns={"contratar_b_cb_id"}), @ORM\Index(name="fk_ahorrros_tipo_cuenta1_idx", columns={"tipo_cuenta_tc_id"})})
 * @ORM\Entity(repositoryClass="Dml\TodoBundle\Entity\AhorrosRepository")
 */
class Ahorros
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ah_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ahId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ah_fecha_creacion", type="date", nullable=true)
     */
    private $ahFechaCreacion;

    /**
     * @var string
     *
     * @ORM\Column(name="ah_numero_cuenta", type="string", length=10, nullable=true)
     */
    private $ahNumeroCuenta;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ah_fecha_eliminacion", type="date", nullable=true)
     */
    private $ahFechaEliminacion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ah_estado", type="boolean", nullable=true)
     */
    private $ahEstado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ah_fecha_crea", type="datetime", nullable=true)
     */
    private $ahFechaCrea;

    /**
     * @var integer
     *
     * @ORM\Column(name="ah_quien_crea", type="integer", nullable=true)
     */
    private $ahQuienCrea;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ah_fecha_modifica", type="datetime", nullable=true)
     */
    private $ahFechaModifica;

    /**
     * @var integer
     *
     * @ORM\Column(name="ah_quien_modifica", type="integer", nullable=true)
     */
    private $ahQuienModifica;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ah_fecha_borrado", type="datetime", nullable=true)
     */
    private $ahFechaBorrado;

    /**
     * @var integer
     *
     * @ORM\Column(name="ah_quien_borra", type="integer", nullable=true)
     */
    private $ahQuienBorra;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ah_borrado_logico", type="boolean", nullable=true)
     */
    private $ahBorradoLogico;

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
     * @var \Dml\TodoBundle\Entity\TipoCuenta
     *
     * @ORM\ManyToOne(targetEntity="Dml\TodoBundle\Entity\TipoCuenta")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipo_cuenta_tc_id", referencedColumnName="tc_id")
     * })
     */
    private $tipoCuentaTc;



    /**
     * Get ahId
     *
     * @return integer 
     */
    public function getAhId()
    {
        return $this->ahId;
    }

    /**
     * Set ahFechaCreacion
     *
     * @param \DateTime $ahFechaCreacion
     * @return Ahorros
     */
    public function setAhFechaCreacion($ahFechaCreacion)
    {
        $this->ahFechaCreacion = $ahFechaCreacion;
    
        return $this;
    }

    /**
     * Get ahFechaCreacion
     *
     * @return \DateTime 
     */
    public function getAhFechaCreacion()
    {
        return $this->ahFechaCreacion;
    }

    /**
     * Set ahNumeroCuenta
     *
     * @param string $ahNumeroCuenta
     * @return Ahorros
     */
    public function setAhNumeroCuenta($ahNumeroCuenta)
    {
        $this->ahNumeroCuenta = $ahNumeroCuenta;
    
        return $this;
    }

    /**
     * Get ahNumeroCuenta
     *
     * @return string 
     */
    public function getAhNumeroCuenta()
    {
        return $this->ahNumeroCuenta;
    }

    /**
     * Set ahFechaEliminacion
     *
     * @param \DateTime $ahFechaEliminacion
     * @return Ahorros
     */
    public function setAhFechaEliminacion($ahFechaEliminacion)
    {
        $this->ahFechaEliminacion = $ahFechaEliminacion;
    
        return $this;
    }

    /**
     * Get ahFechaEliminacion
     *
     * @return \DateTime 
     */
    public function getAhFechaEliminacion()
    {
        return $this->ahFechaEliminacion;
    }

    /**
     * Set ahEstado
     *
     * @param boolean $ahEstado
     * @return Ahorros
     */
    public function setAhEstado($ahEstado)
    {
        $this->ahEstado = $ahEstado;
    
        return $this;
    }

    /**
     * Get ahEstado
     *
     * @return boolean 
     */
    public function getAhEstado()
    {
        return $this->ahEstado;
    }

    /**
     * Set ahFechaCrea
     *
     * @param \DateTime $ahFechaCrea
     * @return Ahorros
     */
    public function setAhFechaCrea($ahFechaCrea)
    {
        $this->ahFechaCrea = $ahFechaCrea;
    
        return $this;
    }

    /**
     * Get ahFechaCrea
     *
     * @return \DateTime 
     */
    public function getAhFechaCrea()
    {
        return $this->ahFechaCrea;
    }

    /**
     * Set ahQuienCrea
     *
     * @param integer $ahQuienCrea
     * @return Ahorros
     */
    public function setAhQuienCrea($ahQuienCrea)
    {
        $this->ahQuienCrea = $ahQuienCrea;
    
        return $this;
    }

    /**
     * Get ahQuienCrea
     *
     * @return integer 
     */
    public function getAhQuienCrea()
    {
        return $this->ahQuienCrea;
    }

    /**
     * Set ahFechaModifica
     *
     * @param \DateTime $ahFechaModifica
     * @return Ahorros
     */
    public function setAhFechaModifica($ahFechaModifica)
    {
        $this->ahFechaModifica = $ahFechaModifica;
    
        return $this;
    }

    /**
     * Get ahFechaModifica
     *
     * @return \DateTime 
     */
    public function getAhFechaModifica()
    {
        return $this->ahFechaModifica;
    }

    /**
     * Set ahQuienModifica
     *
     * @param integer $ahQuienModifica
     * @return Ahorros
     */
    public function setAhQuienModifica($ahQuienModifica)
    {
        $this->ahQuienModifica = $ahQuienModifica;
    
        return $this;
    }

    /**
     * Get ahQuienModifica
     *
     * @return integer 
     */
    public function getAhQuienModifica()
    {
        return $this->ahQuienModifica;
    }

    /**
     * Set ahFechaBorrado
     *
     * @param \DateTime $ahFechaBorrado
     * @return Ahorros
     */
    public function setAhFechaBorrado($ahFechaBorrado)
    {
        $this->ahFechaBorrado = $ahFechaBorrado;
    
        return $this;
    }

    /**
     * Get ahFechaBorrado
     *
     * @return \DateTime 
     */
    public function getAhFechaBorrado()
    {
        return $this->ahFechaBorrado;
    }

    /**
     * Set ahQuienBorra
     *
     * @param integer $ahQuienBorra
     * @return Ahorros
     */
    public function setAhQuienBorra($ahQuienBorra)
    {
        $this->ahQuienBorra = $ahQuienBorra;
    
        return $this;
    }

    /**
     * Get ahQuienBorra
     *
     * @return integer 
     */
    public function getAhQuienBorra()
    {
        return $this->ahQuienBorra;
    }

    /**
     * Set ahBorradoLogico
     *
     * @param boolean $ahBorradoLogico
     * @return Ahorros
     */
    public function setAhBorradoLogico($ahBorradoLogico)
    {
        $this->ahBorradoLogico = $ahBorradoLogico;
    
        return $this;
    }

    /**
     * Get ahBorradoLogico
     *
     * @return boolean 
     */
    public function getAhBorradoLogico()
    {
        return $this->ahBorradoLogico;
    }

    /**
     * Set contratarBCb
     *
     * @param \Dml\TodoBundle\Entity\ContratarB $contratarBCb
     * @return Ahorros
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
     * Set tipoCuentaTc
     *
     * @param \Dml\TodoBundle\Entity\TipoCuenta $tipoCuentaTc
     * @return Ahorros
     */
    public function setTipoCuentaTc(\Dml\TodoBundle\Entity\TipoCuenta $tipoCuentaTc = null)
    {
        $this->tipoCuentaTc = $tipoCuentaTc;
    
        return $this;
    }

    /**
     * Get tipoCuentaTc
     *
     * @return \Dml\TodoBundle\Entity\TipoCuenta 
     */
    public function getTipoCuentaTc()
    {
        return $this->tipoCuentaTc;
    }
}
