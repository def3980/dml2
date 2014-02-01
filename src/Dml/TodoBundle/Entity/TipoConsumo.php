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
}
