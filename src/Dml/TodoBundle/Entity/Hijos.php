<?php

namespace Dml\TodoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hijos
 *
 * @ORM\Table(name="HIJOS", indexes={@ORM\Index(name="fk_hijos_persona1_idx", columns={"persona_pe_id"})})
 * @ORM\Entity(repositoryClass="Dml\TodoBundle\Entity\Repositories\HijosRepository")
 */
class Hijos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="hi_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $hiId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hi_fecha_nacimiento", type="date", nullable=true)
     */
    private $hiFechaNacimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="hi_nombres", type="string", length=100, nullable=true)
     */
    private $hiNombres;

    /**
     * @var string
     *
     * @ORM\Column(name="hi_apellidos", type="string", length=100, nullable=true)
     */
    private $hiApellidos;

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
     * Get hiId
     *
     * @return integer 
     */
    public function getHiId()
    {
        return $this->hiId;
    }

    /**
     * Set hiFechaNacimiento
     *
     * @param \DateTime $hiFechaNacimiento
     * @return Hijos
     */
    public function setHiFechaNacimiento($hiFechaNacimiento)
    {
        $this->hiFechaNacimiento = $hiFechaNacimiento;

        return $this;
    }

    /**
     * Get hiFechaNacimiento
     *
     * @return \DateTime 
     */
    public function getHiFechaNacimiento()
    {
        return $this->hiFechaNacimiento;
    }

    /**
     * Set hiNombres
     *
     * @param string $hiNombres
     * @return Hijos
     */
    public function setHiNombres($hiNombres)
    {
        $this->hiNombres = $hiNombres;

        return $this;
    }

    /**
     * Get hiNombres
     *
     * @return string 
     */
    public function getHiNombres()
    {
        return $this->hiNombres;
    }

    /**
     * Set hiApellidos
     *
     * @param string $hiApellidos
     * @return Hijos
     */
    public function setHiApellidos($hiApellidos)
    {
        $this->hiApellidos = $hiApellidos;

        return $this;
    }

    /**
     * Get hiApellidos
     *
     * @return string 
     */
    public function getHiApellidos()
    {
        return $this->hiApellidos;
    }

    /**
     * Set personaPe
     *
     * @param \Dml\TodoBundle\Entity\Persona $personaPe
     * @return Hijos
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
}
