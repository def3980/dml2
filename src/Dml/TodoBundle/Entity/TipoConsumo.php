<?php

namespace Dml\TodoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoConsumo
 *
 * @ORM\Table(name="TIPO_CONSUMO")
 * @ORM\Entity(repositoryClass="Dml\TodoBundle\Entity\TipoConsumoRepository")
 */
class TipoConsumo
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
     * @var string
     *
     * @ORM\Column(name="tc_alias", type="string", length=2, nullable=true)
     */
    private $tcAlias;

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
     * @return TipoConsumo
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
     * Set tcAlias
     *
     * @param string $tcAlias
     * @return TipoConsumo
     */
    public function setTcAlias($tcAlias)
    {
        $this->tcAlias = $tcAlias;
    
        return $this;
    }

    /**
     * Get tcAlias
     *
     * @return string 
     */
    public function getTcAlias()
    {
        return $this->tcAlias;
    }

    /**
     * Set tcFechaCrea
     *
     * @param \DateTime $tcFechaCrea
     * @return TipoConsumo
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
     * @return TipoConsumo
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
     * @return TipoConsumo
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
     * @return TipoConsumo
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
     * Set tcBorradoLogico
     *
     * @param boolean $tcBorradoLogico
     * @return TipoConsumo
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
