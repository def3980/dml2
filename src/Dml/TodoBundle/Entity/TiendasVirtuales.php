<?php

namespace Dml\TodoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TiendasVirtuales
 *
 * @ORM\Table(name="TIENDAS_VIRTUALES")
 * @ORM\Entity(repositoryClass="Dml\TodoBundle\Entity\TiendasVirtualesRepository")
 */
class TiendasVirtuales
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tv_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tvId;

    /**
     * @var string
     *
     * @ORM\Column(name="tv_nombre", type="string", length=100, nullable=true)
     */
    private $tvNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="tv_sitio_web", type="string", length=100, nullable=true)
     */
    private $tvSitioWeb;



    /**
     * Get tvId
     *
     * @return integer 
     */
    public function getTvId()
    {
        return $this->tvId;
    }

    /**
     * Set tvNombre
     *
     * @param string $tvNombre
     * @return TiendasVirtuales
     */
    public function setTvNombre($tvNombre)
    {
        $this->tvNombre = $tvNombre;
    
        return $this;
    }

    /**
     * Get tvNombre
     *
     * @return string 
     */
    public function getTvNombre()
    {
        return $this->tvNombre;
    }

    /**
     * Set tvSitioWeb
     *
     * @param string $tvSitioWeb
     * @return TiendasVirtuales
     */
    public function setTvSitioWeb($tvSitioWeb)
    {
        $this->tvSitioWeb = $tvSitioWeb;
    
        return $this;
    }

    /**
     * Get tvSitioWeb
     *
     * @return string 
     */
    public function getTvSitioWeb()
    {
        return $this->tvSitioWeb;
    }
}
