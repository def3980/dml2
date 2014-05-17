<?php

namespace Dml\TodoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RegistroTv
 *
 * @ORM\Table(name="REGISTRO_TV", indexes={@ORM\Index(name="fk_registro_tv_persona1_idx", columns={"persona_pe_id"}), @ORM\Index(name="fk_registro_tv_tiendas_virtuales1_idx", columns={"tiendas_virtuales_tv_id"})})
 * @ORM\Entity(repositoryClass="Dml\TodoBundle\Entity\Repositories\RegistroTvRepository")
 */
class RegistroTv
{
    /**
     * @var integer
     *
     * @ORM\Column(name="rtv_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $rtvId;

    /**
     * @var string
     *
     * @ORM\Column(name="rtv_usr", type="string", length=100, nullable=true)
     */
    private $rtvUsr;

    /**
     * @var string
     *
     * @ORM\Column(name="rtv_pwd", type="string", length=50, nullable=true)
     */
    private $rtvPwd;

    /**
     * @var \Dml\TodoBundle\Entity\Persona
     *
     * @ORM\ManyToOne(targetEntity="Dml\TodoBundle\Entity\Persona")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="persona_pe_id", referencedColumnName="pe_id")
     * })
     */
    private $personaPe;

    /**
     * @var \Dml\TodoBundle\Entity\TiendasVirtuales
     *
     * @ORM\ManyToOne(targetEntity="Dml\TodoBundle\Entity\TiendasVirtuales")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tiendas_virtuales_tv_id", referencedColumnName="tv_id")
     * })
     */
    private $tiendasVirtualesTv;



    /**
     * Get rtvId
     *
     * @return integer 
     */
    public function getRtvId()
    {
        return $this->rtvId;
    }

    /**
     * Set rtvUsr
     *
     * @param string $rtvUsr
     * @return RegistroTv
     */
    public function setRtvUsr($rtvUsr)
    {
        $this->rtvUsr = $rtvUsr;
    
        return $this;
    }

    /**
     * Get rtvUsr
     *
     * @return string 
     */
    public function getRtvUsr()
    {
        return $this->rtvUsr;
    }

    /**
     * Set rtvPwd
     *
     * @param string $rtvPwd
     * @return RegistroTv
     */
    public function setRtvPwd($rtvPwd)
    {
        $this->rtvPwd = $rtvPwd;
    
        return $this;
    }

    /**
     * Get rtvPwd
     *
     * @return string 
     */
    public function getRtvPwd()
    {
        return $this->rtvPwd;
    }

    /**
     * Set personaPe
     *
     * @param \Dml\TodoBundle\Entity\Persona $personaPe
     * @return RegistroTv
     */
    public function setPersonaPe(\Dml\TodoBundle\Entity\Persona $personaPe = null)
    {
        $this->personaPe = $personaPe;
    
        return $this;
    }

    /**
     * Get personaPe
     *
     * @return \Dml\TodoBundle\Entity\Persona 
     */
    public function getPersonaPe()
    {
        return $this->personaPe;
    }

    /**
     * Set tiendasVirtualesTv
     *
     * @param \Dml\TodoBundle\Entity\TiendasVirtuales $tiendasVirtualesTv
     * @return RegistroTv
     */
    public function setTiendasVirtualesTv(\Dml\TodoBundle\Entity\TiendasVirtuales $tiendasVirtualesTv = null)
    {
        $this->tiendasVirtualesTv = $tiendasVirtualesTv;
    
        return $this;
    }

    /**
     * Get tiendasVirtualesTv
     *
     * @return \Dml\TodoBundle\Entity\TiendasVirtuales 
     */
    public function getTiendasVirtualesTv()
    {
        return $this->tiendasVirtualesTv;
    }
}
