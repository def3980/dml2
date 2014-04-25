<?php

namespace Dml\TodoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Remuneracion
 *
 * @ORM\Table(name="REMUNERACION")
 * @ORM\Entity(repositoryClass="Dml\TodoBundle\Entity\RemuneracionRepository")
 */
class Remuneracion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="re_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $reId;

    /**
     * @var string
     *
     * @ORM\Column(name="re_nombre", type="string", length=100, nullable=true)
     */
    private $reNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="re_alias", type="string", length=7, nullable=true)
     */
    private $reAlias;

    /**
     * @var string
     *
     * @ORM\Column(name="re_valor", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $reValor;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="re_fecha_crea", type="datetime", nullable=true)
     */
    private $reFechaCrea;

    /**
     * @var integer
     *
     * @ORM\Column(name="re_quien_crea", type="integer", nullable=true)
     */
    private $reQuienCrea;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="re_fecha_modifica", type="datetime", nullable=true)
     */
    private $reFechaModifica;

    /**
     * @var integer
     *
     * @ORM\Column(name="re_quien_modifica", type="integer", nullable=true)
     */
    private $reQuienModifica;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="re_fecha_borrado", type="datetime", nullable=true)
     */
    private $reFechaBorrado;

    /**
     * @var integer
     *
     * @ORM\Column(name="re_quien_borra", type="integer", nullable=true)
     */
    private $reQuienBorra;

    /**
     * @var boolean
     *
     * @ORM\Column(name="re_borrado_logico", type="boolean", nullable=true)
     */
    private $reBorradoLogico;



    /**
     * Get reId
     *
     * @return integer 
     */
    public function getReId()
    {
        return $this->reId;
    }

    /**
     * Set reNombre
     *
     * @param string $reNombre
     * @return Remuneracion
     */
    public function setReNombre($reNombre)
    {
        $this->reNombre = $reNombre;
    
        return $this;
    }

    /**
     * Get reNombre
     *
     * @return string 
     */
    public function getReNombre()
    {
        return $this->reNombre;
    }

    /**
     * Set reAlias
     *
     * @param string $reAlias
     * @return Remuneracion
     */
    public function setReAlias($reAlias)
    {
        $this->reAlias = $reAlias;
    
        return $this;
    }

    /**
     * Get reAlias
     *
     * @return string 
     */
    public function getReAlias()
    {
        return $this->reAlias;
    }

    /**
     * Set reValor
     *
     * @param string $reValor
     * @return Remuneracion
     */
    public function setReValor($reValor)
    {
        $this->reValor = $reValor;
    
        return $this;
    }

    /**
     * Get reValor
     *
     * @return string 
     */
    public function getReValor()
    {
        return $this->reValor;
    }

    /**
     * Set reFechaCrea
     *
     * @param \DateTime $reFechaCrea
     * @return Remuneracion
     */
    public function setReFechaCrea($reFechaCrea)
    {
        $this->reFechaCrea = $reFechaCrea;
    
        return $this;
    }

    /**
     * Get reFechaCrea
     *
     * @return \DateTime 
     */
    public function getReFechaCrea()
    {
        return $this->reFechaCrea;
    }

    /**
     * Set reQuienCrea
     *
     * @param integer $reQuienCrea
     * @return Remuneracion
     */
    public function setReQuienCrea($reQuienCrea)
    {
        $this->reQuienCrea = $reQuienCrea;
    
        return $this;
    }

    /**
     * Get reQuienCrea
     *
     * @return integer 
     */
    public function getReQuienCrea()
    {
        return $this->reQuienCrea;
    }

    /**
     * Set reFechaModifica
     *
     * @param \DateTime $reFechaModifica
     * @return Remuneracion
     */
    public function setReFechaModifica($reFechaModifica)
    {
        $this->reFechaModifica = $reFechaModifica;
    
        return $this;
    }

    /**
     * Get reFechaModifica
     *
     * @return \DateTime 
     */
    public function getReFechaModifica()
    {
        return $this->reFechaModifica;
    }

    /**
     * Set reQuienModifica
     *
     * @param integer $reQuienModifica
     * @return Remuneracion
     */
    public function setReQuienModifica($reQuienModifica)
    {
        $this->reQuienModifica = $reQuienModifica;
    
        return $this;
    }

    /**
     * Get reQuienModifica
     *
     * @return integer 
     */
    public function getReQuienModifica()
    {
        return $this->reQuienModifica;
    }

    /**
     * Set reFechaBorrado
     *
     * @param \DateTime $reFechaBorrado
     * @return Remuneracion
     */
    public function setReFechaBorrado($reFechaBorrado)
    {
        $this->reFechaBorrado = $reFechaBorrado;
    
        return $this;
    }

    /**
     * Get reFechaBorrado
     *
     * @return \DateTime 
     */
    public function getReFechaBorrado()
    {
        return $this->reFechaBorrado;
    }

    /**
     * Set reQuienBorra
     *
     * @param integer $reQuienBorra
     * @return Remuneracion
     */
    public function setReQuienBorra($reQuienBorra)
    {
        $this->reQuienBorra = $reQuienBorra;
    
        return $this;
    }

    /**
     * Get reQuienBorra
     *
     * @return integer 
     */
    public function getReQuienBorra()
    {
        return $this->reQuienBorra;
    }

    /**
     * Set reBorradoLogico
     *
     * @param boolean $reBorradoLogico
     * @return Remuneracion
     */
    public function setReBorradoLogico($reBorradoLogico)
    {
        $this->reBorradoLogico = $reBorradoLogico;
    
        return $this;
    }

    /**
     * Get reBorradoLogico
     *
     * @return boolean 
     */
    public function getReBorradoLogico()
    {
        return $this->reBorradoLogico;
    }
}
