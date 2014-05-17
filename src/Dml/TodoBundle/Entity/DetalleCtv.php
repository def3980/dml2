<?php

namespace Dml\TodoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetalleCtv
 *
 * @ORM\Table(name="DETALLE_CTV", indexes={@ORM\Index(name="fk_detalle_ctv_compras_tv1_idx", columns={"compras_tv_ctv_id"})})
 * @ORM\Entity(repositoryClass="Dml\TodoBundle\Entity\Repositories\DetalleCtvRepository")
 */
class DetalleCtv
{
    /**
     * @var integer
     *
     * @ORM\Column(name="dctv_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $dctvId;

    /**
     * @var string
     *
     * @ORM\Column(name="dctv_item", type="string", length=100, nullable=true)
     */
    private $dctvItem;

    /**
     * @var string
     *
     * @ORM\Column(name="dctv_precio", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $dctvPrecio;

    /**
     * @var \Dml\TodoBundle\Entity\ComprasTv
     *
     * @ORM\ManyToOne(targetEntity="Dml\TodoBundle\Entity\ComprasTv")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="compras_tv_ctv_id", referencedColumnName="ctv_id")
     * })
     */
    private $comprasTvCtv;



    /**
     * Get dctvId
     *
     * @return integer 
     */
    public function getDctvId()
    {
        return $this->dctvId;
    }

    /**
     * Set dctvItem
     *
     * @param string $dctvItem
     * @return DetalleCtv
     */
    public function setDctvItem($dctvItem)
    {
        $this->dctvItem = $dctvItem;
    
        return $this;
    }

    /**
     * Get dctvItem
     *
     * @return string 
     */
    public function getDctvItem()
    {
        return $this->dctvItem;
    }

    /**
     * Set dctvPrecio
     *
     * @param string $dctvPrecio
     * @return DetalleCtv
     */
    public function setDctvPrecio($dctvPrecio)
    {
        $this->dctvPrecio = $dctvPrecio;
    
        return $this;
    }

    /**
     * Get dctvPrecio
     *
     * @return string 
     */
    public function getDctvPrecio()
    {
        return $this->dctvPrecio;
    }

    /**
     * Set comprasTvCtv
     *
     * @param \Dml\TodoBundle\Entity\ComprasTv $comprasTvCtv
     * @return DetalleCtv
     */
    public function setComprasTvCtv(\Dml\TodoBundle\Entity\ComprasTv $comprasTvCtv = null)
    {
        $this->comprasTvCtv = $comprasTvCtv;
    
        return $this;
    }

    /**
     * Get comprasTvCtv
     *
     * @return \Dml\TodoBundle\Entity\ComprasTv 
     */
    public function getComprasTvCtv()
    {
        return $this->comprasTvCtv;
    }
}
