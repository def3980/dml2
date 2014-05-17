<?php

namespace Dml\TodoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prestamos
 *
 * @ORM\Table(name="PRESTAMOS", indexes={@ORM\Index(name="fk_prestamos_contratar_b1_idx", columns={"contratar_b_cb_id"})})
 * @ORM\Entity(repositoryClass="Dml\TodoBundle\Entity\Repositories\PrestamosRepository")
 */
class Prestamos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="pr_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $prId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pr_fecha_concesion", type="date", nullable=true)
     */
    private $prFechaConcesion;

    /**
     * @var string
     *
     * @ORM\Column(name="pr_nombre_prestamo", type="string", length=100, nullable=true)
     */
    private $prNombrePrestamo;

    /**
     * @var string
     *
     * @ORM\Column(name="pr_detalle", type="text", nullable=true)
     */
    private $prDetalle;

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
     * Get prId
     *
     * @return integer 
     */
    public function getPrId()
    {
        return $this->prId;
    }

    /**
     * Set prFechaConcesion
     *
     * @param \DateTime $prFechaConcesion
     * @return Prestamos
     */
    public function setPrFechaConcesion($prFechaConcesion)
    {
        $this->prFechaConcesion = $prFechaConcesion;
    
        return $this;
    }

    /**
     * Get prFechaConcesion
     *
     * @return \DateTime 
     */
    public function getPrFechaConcesion()
    {
        return $this->prFechaConcesion;
    }

    /**
     * Set prNombrePrestamo
     *
     * @param string $prNombrePrestamo
     * @return Prestamos
     */
    public function setPrNombrePrestamo($prNombrePrestamo)
    {
        $this->prNombrePrestamo = $prNombrePrestamo;
    
        return $this;
    }

    /**
     * Get prNombrePrestamo
     *
     * @return string 
     */
    public function getPrNombrePrestamo()
    {
        return $this->prNombrePrestamo;
    }

    /**
     * Set prDetalle
     *
     * @param string $prDetalle
     * @return Prestamos
     */
    public function setPrDetalle($prDetalle)
    {
        $this->prDetalle = $prDetalle;
    
        return $this;
    }

    /**
     * Get prDetalle
     *
     * @return string 
     */
    public function getPrDetalle()
    {
        return $this->prDetalle;
    }

    /**
     * Set contratarBCb
     *
     * @param \Dml\TodoBundle\Entity\ContratarB $contratarBCb
     * @return Prestamos
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
}
