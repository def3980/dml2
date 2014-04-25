<?php

namespace Dml\TodoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Persona
 *
 * @ORM\Table(name="PERSONA")
 * @ORM\Entity(repositoryClass="Dml\TodoBundle\Entity\PersonaRepository")
 */
class Persona
{
    /**
     * @var integer
     *
     * @ORM\Column(name="pe_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $peId;

    /**
     * @var string
     *
     * @ORM\Column(name="pe_cedula", type="string", length=100, nullable=true)
     */
    private $peCedula;

    /**
     * @var string
     *
     * @ORM\Column(name="pe_nombres", type="string", length=100, nullable=true)
     */
    private $peNombres;

    /**
     * @var string
     *
     * @ORM\Column(name="pe_apellidos", type="string", length=100, nullable=true)
     */
    private $peApellidos;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pe_fecha_nacimiento", type="date", nullable=true)
     */
    private $peFechaNacimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="pe_email", type="string", length=100, nullable=true)
     */
    private $peEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="pe_usr", type="string", length=100, nullable=true)
     */
    private $peUsr;

    /**
     * @var string
     *
     * @ORM\Column(name="pe_pwd", type="string", length=50, nullable=true)
     */
    private $pePwd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pe_fecha_crea", type="datetime", nullable=true)
     */
    private $peFechaCrea;

    /**
     * @var integer
     *
     * @ORM\Column(name="pe_quien_crea", type="integer", nullable=true)
     */
    private $peQuienCrea;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pe_fecha_modifica", type="datetime", nullable=true)
     */
    private $peFechaModifica;

    /**
     * @var integer
     *
     * @ORM\Column(name="pe_quien_modifica", type="integer", nullable=true)
     */
    private $peQuienModifica;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pe_fecha_borrado", type="datetime", nullable=true)
     */
    private $peFechaBorrado;

    /**
     * @var integer
     *
     * @ORM\Column(name="pe_quien_borra", type="integer", nullable=true)
     */
    private $peQuienBorra;

    /**
     * @var boolean
     *
     * @ORM\Column(name="pe_borrado_logico", type="boolean", nullable=true)
     */
    private $peBorradoLogico;



    /**
     * Get peId
     *
     * @return integer 
     */
    public function getPeId()
    {
        return $this->peId;
    }

    /**
     * Set peCedula
     *
     * @param string $peCedula
     * @return Persona
     */
    public function setPeCedula($peCedula)
    {
        $this->peCedula = $peCedula;
    
        return $this;
    }

    /**
     * Get peCedula
     *
     * @return string 
     */
    public function getPeCedula()
    {
        return $this->peCedula;
    }

    /**
     * Set peNombres
     *
     * @param string $peNombres
     * @return Persona
     */
    public function setPeNombres($peNombres)
    {
        $this->peNombres = $peNombres;
    
        return $this;
    }

    /**
     * Get peNombres
     *
     * @return string 
     */
    public function getPeNombres()
    {
        return $this->peNombres;
    }

    /**
     * Set peApellidos
     *
     * @param string $peApellidos
     * @return Persona
     */
    public function setPeApellidos($peApellidos)
    {
        $this->peApellidos = $peApellidos;
    
        return $this;
    }

    /**
     * Get peApellidos
     *
     * @return string 
     */
    public function getPeApellidos()
    {
        return $this->peApellidos;
    }

    /**
     * Set peFechaNacimiento
     *
     * @param \DateTime $peFechaNacimiento
     * @return Persona
     */
    public function setPeFechaNacimiento($peFechaNacimiento)
    {
        $this->peFechaNacimiento = $peFechaNacimiento;
    
        return $this;
    }

    /**
     * Get peFechaNacimiento
     *
     * @return \DateTime 
     */
    public function getPeFechaNacimiento()
    {
        return $this->peFechaNacimiento;
    }

    /**
     * Set peEmail
     *
     * @param string $peEmail
     * @return Persona
     */
    public function setPeEmail($peEmail)
    {
        $this->peEmail = $peEmail;
    
        return $this;
    }

    /**
     * Get peEmail
     *
     * @return string 
     */
    public function getPeEmail()
    {
        return $this->peEmail;
    }

    /**
     * Set peUsr
     *
     * @param string $peUsr
     * @return Persona
     */
    public function setPeUsr($peUsr)
    {
        $this->peUsr = $peUsr;
    
        return $this;
    }

    /**
     * Get peUsr
     *
     * @return string 
     */
    public function getPeUsr()
    {
        return $this->peUsr;
    }

    /**
     * Set pePwd
     *
     * @param string $pePwd
     * @return Persona
     */
    public function setPePwd($pePwd)
    {
        $this->pePwd = $pePwd;
    
        return $this;
    }

    /**
     * Get pePwd
     *
     * @return string 
     */
    public function getPePwd()
    {
        return $this->pePwd;
    }

    /**
     * Set peFechaCrea
     *
     * @param \DateTime $peFechaCrea
     * @return Persona
     */
    public function setPeFechaCrea($peFechaCrea)
    {
        $this->peFechaCrea = $peFechaCrea;
    
        return $this;
    }

    /**
     * Get peFechaCrea
     *
     * @return \DateTime 
     */
    public function getPeFechaCrea()
    {
        return $this->peFechaCrea;
    }

    /**
     * Set peQuienCrea
     *
     * @param integer $peQuienCrea
     * @return Persona
     */
    public function setPeQuienCrea($peQuienCrea)
    {
        $this->peQuienCrea = $peQuienCrea;
    
        return $this;
    }

    /**
     * Get peQuienCrea
     *
     * @return integer 
     */
    public function getPeQuienCrea()
    {
        return $this->peQuienCrea;
    }

    /**
     * Set peFechaModifica
     *
     * @param \DateTime $peFechaModifica
     * @return Persona
     */
    public function setPeFechaModifica($peFechaModifica)
    {
        $this->peFechaModifica = $peFechaModifica;
    
        return $this;
    }

    /**
     * Get peFechaModifica
     *
     * @return \DateTime 
     */
    public function getPeFechaModifica()
    {
        return $this->peFechaModifica;
    }

    /**
     * Set peQuienModifica
     *
     * @param integer $peQuienModifica
     * @return Persona
     */
    public function setPeQuienModifica($peQuienModifica)
    {
        $this->peQuienModifica = $peQuienModifica;
    
        return $this;
    }

    /**
     * Get peQuienModifica
     *
     * @return integer 
     */
    public function getPeQuienModifica()
    {
        return $this->peQuienModifica;
    }

    /**
     * Set peFechaBorrado
     *
     * @param \DateTime $peFechaBorrado
     * @return Persona
     */
    public function setPeFechaBorrado($peFechaBorrado)
    {
        $this->peFechaBorrado = $peFechaBorrado;
    
        return $this;
    }

    /**
     * Get peFechaBorrado
     *
     * @return \DateTime 
     */
    public function getPeFechaBorrado()
    {
        return $this->peFechaBorrado;
    }

    /**
     * Set peQuienBorra
     *
     * @param integer $peQuienBorra
     * @return Persona
     */
    public function setPeQuienBorra($peQuienBorra)
    {
        $this->peQuienBorra = $peQuienBorra;
    
        return $this;
    }

    /**
     * Get peQuienBorra
     *
     * @return integer 
     */
    public function getPeQuienBorra()
    {
        return $this->peQuienBorra;
    }

    /**
     * Set peBorradoLogico
     *
     * @param boolean $peBorradoLogico
     * @return Persona
     */
    public function setPeBorradoLogico($peBorradoLogico)
    {
        $this->peBorradoLogico = $peBorradoLogico;
    
        return $this;
    }

    /**
     * Get peBorradoLogico
     *
     * @return boolean 
     */
    public function getPeBorradoLogico()
    {
        return $this->peBorradoLogico;
    }
}
