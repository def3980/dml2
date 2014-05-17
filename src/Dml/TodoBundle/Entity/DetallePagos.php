<?php

namespace Dml\TodoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetallePagos
 *
 * @ORM\Table(name="DETALLE_PAGOS", indexes={@ORM\Index(name="fk_detalle_pagos_prestamos1_idx", columns={"prestamos_pr_id"})})
 * @ORM\Entity(repositoryClass="Dml\TodoBundle\Entity\Repositories\DetallePagosRepository")
 */
class DetallePagos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="dp_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $dpId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dp_fecha", type="date", nullable=true)
     */
    private $dpFecha;

    /**
     * @var string
     *
     * @ORM\Column(name="dp_valor", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $dpValor;

    /**
     * @var \Dml\TodoBundle\Entity\Prestamos
     *
     * @ORM\ManyToOne(targetEntity="Dml\TodoBundle\Entity\Prestamos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="prestamos_pr_id", referencedColumnName="pr_id")
     * })
     */
    private $prestamosPr;



    /**
     * Get dpId
     *
     * @return integer 
     */
    public function getDpId()
    {
        return $this->dpId;
    }

    /**
     * Set dpFecha
     *
     * @param \DateTime $dpFecha
     * @return DetallePagos
     */
    public function setDpFecha($dpFecha)
    {
        $this->dpFecha = $dpFecha;
    
        return $this;
    }

    /**
     * Get dpFecha
     *
     * @return \DateTime 
     */
    public function getDpFecha()
    {
        return $this->dpFecha;
    }

    /**
     * Set dpValor
     *
     * @param string $dpValor
     * @return DetallePagos
     */
    public function setDpValor($dpValor)
    {
        $this->dpValor = $dpValor;
    
        return $this;
    }

    /**
     * Get dpValor
     *
     * @return string 
     */
    public function getDpValor()
    {
        return $this->dpValor;
    }

    /**
     * Set prestamosPr
     *
     * @param \Dml\TodoBundle\Entity\Prestamos $prestamosPr
     * @return DetallePagos
     */
    public function setPrestamosPr(\Dml\TodoBundle\Entity\Prestamos $prestamosPr = null)
    {
        $this->prestamosPr = $prestamosPr;
    
        return $this;
    }

    /**
     * Get prestamosPr
     *
     * @return \Dml\TodoBundle\Entity\Prestamos 
     */
    public function getPrestamosPr()
    {
        return $this->prestamosPr;
    }
}
