<?php

namespace Dml\TodoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoTcd
 *
 * @ORM\Table(name="TIPO_TCD")
 * @ORM\Entity(repositoryClass="Dml\TodoBundle\Entity\Repositories\TipoTcdRepository")
 */
class TipoTcd
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ttcd_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ttcdId;

    /**
     * @var string
     *
     * @ORM\Column(name="ttcd_nombre", type="string", length=100, nullable=true)
     */
    private $ttcdNombre;



    /**
     * Get ttcdId
     *
     * @return integer 
     */
    public function getTtcdId()
    {
        return $this->ttcdId;
    }

    /**
     * Set ttcdNombre
     *
     * @param string $ttcdNombre
     * @return TipoTcd
     */
    public function setTtcdNombre($ttcdNombre)
    {
        $this->ttcdNombre = $ttcdNombre;
    
        return $this;
    }

    /**
     * Get ttcdNombre
     *
     * @return string 
     */
    public function getTtcdNombre()
    {
        return $this->ttcdNombre;
    }
}
