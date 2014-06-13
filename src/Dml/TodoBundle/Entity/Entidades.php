<?php

namespace Dml\TodoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entidades
 *
 * @ORM\Table(name="ENTIDADES")
 * @ORM\Entity(repositoryClass="Dml\TodoBundle\Entity\Repositories\EntidadesRepository")
 */
class Entidades
{
    /**
     * @var integer
     *
     * @ORM\Column(name="es_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $esId;

    /**
     * @var string
     *
     * @ORM\Column(name="es_entidad", type="string", length=100, nullable=true)
     */
    private $esEntidad;

    /**
     * @var string
     *
     * @ORM\Column(name="es_alias", type="string", length=50, nullable=true)
     */
    private $esAlias;

    /**
     * @var string
     *
     * @ORM\Column(name="es_direccion", type="text", nullable=true)
     */
    private $esDireccion;

    /**
     * @var string
     *
     * @ORM\Column(name="es_tlf1", type="string", length=9, nullable=true)
     */
    private $esTlf1;

    /**
     * @var string
     *
     * @ORM\Column(name="es_ext1", type="string", length=5, nullable=true)
     */
    private $esExt1;

    /**
     * @var string
     *
     * @ORM\Column(name="es_tlf2", type="string", length=9, nullable=true)
     */
    private $esTlf2;

    /**
     * @var string
     *
     * @ORM\Column(name="es_ext2", type="string", length=5, nullable=true)
     */
    private $esExt2;

    /**
     * @var string
     *
     * @ORM\Column(name="es_sitio_web", type="string", length=100, nullable=true)
     */
    private $esSitioWeb;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="es_fecha_crea", type="datetime", nullable=true)
     */
    private $esFechaCrea;

    /**
     * @var integer
     *
     * @ORM\Column(name="es_quien_crea", type="integer", nullable=true)
     */
    private $esQuienCrea;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="es_fecha_modifica", type="datetime", nullable=true)
     */
    private $esFechaModifica;

    /**
     * @var integer
     *
     * @ORM\Column(name="es_quien_modifica", type="integer", nullable=true)
     */
    private $esQuienModifica;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="es_fecha_borrado", type="datetime", nullable=true)
     */
    private $esFechaBorrado;

    /**
     * @var integer
     *
     * @ORM\Column(name="es_quien_borra", type="integer", nullable=true)
     */
    private $esQuienBorra;

    /**
     * @var boolean
     *
     * @ORM\Column(name="es_borrado_logico", type="boolean", nullable=true)
     */
    private $esBorradoLogico;



    /**
     * Get esId
     *
     * @return integer 
     */
    public function getEsId()
    {
        return $this->esId;
    }

    /**
     * Set esEntidad
     *
     * @param string $esEntidad
     * @return Entidades
     */
    public function setEsEntidad($esEntidad)
    {
        $this->esEntidad = $esEntidad;

        return $this;
    }

    /**
     * Get esEntidad
     *
     * @return string 
     */
    public function getEsEntidad()
    {
        return $this->esEntidad;
    }

    /**
     * Set esAlias
     *
     * @param string $esAlias
     * @return Entidades
     */
    public function setEsAlias($esAlias)
    {
        $this->esAlias = $esAlias;

        return $this;
    }

    /**
     * Get esAlias
     *
     * @return string 
     */
    public function getEsAlias()
    {
        return $this->esAlias;
    }

    /**
     * Set esDireccion
     *
     * @param string $esDireccion
     * @return Entidades
     */
    public function setEsDireccion($esDireccion)
    {
        $this->esDireccion = $esDireccion;

        return $this;
    }

    /**
     * Get esDireccion
     *
     * @return string 
     */
    public function getEsDireccion()
    {
        return $this->esDireccion;
    }

    /**
     * Set esTlf1
     *
     * @param string $esTlf1
     * @return Entidades
     */
    public function setEsTlf1($esTlf1)
    {
        $this->esTlf1 = $esTlf1;

        return $this;
    }

    /**
     * Get esTlf1
     *
     * @return string 
     */
    public function getEsTlf1()
    {
        return $this->esTlf1;
    }

    /**
     * Set esExt1
     *
     * @param string $esExt1
     * @return Entidades
     */
    public function setEsExt1($esExt1)
    {
        $this->esExt1 = $esExt1;

        return $this;
    }

    /**
     * Get esExt1
     *
     * @return string 
     */
    public function getEsExt1()
    {
        return $this->esExt1;
    }

    /**
     * Set esTlf2
     *
     * @param string $esTlf2
     * @return Entidades
     */
    public function setEsTlf2($esTlf2)
    {
        $this->esTlf2 = $esTlf2;

        return $this;
    }

    /**
     * Get esTlf2
     *
     * @return string 
     */
    public function getEsTlf2()
    {
        return $this->esTlf2;
    }

    /**
     * Set esExt2
     *
     * @param string $esExt2
     * @return Entidades
     */
    public function setEsExt2($esExt2)
    {
        $this->esExt2 = $esExt2;

        return $this;
    }

    /**
     * Get esExt2
     *
     * @return string 
     */
    public function getEsExt2()
    {
        return $this->esExt2;
    }

    /**
     * Set esSitioWeb
     *
     * @param string $esSitioWeb
     * @return Entidades
     */
    public function setEsSitioWeb($esSitioWeb)
    {
        $this->esSitioWeb = $esSitioWeb;

        return $this;
    }

    /**
     * Get esSitioWeb
     *
     * @return string 
     */
    public function getEsSitioWeb()
    {
        return $this->esSitioWeb;
    }

    /**
     * Set esFechaCrea
     *
     * @param \DateTime $esFechaCrea
     * @return Entidades
     */
    public function setEsFechaCrea($esFechaCrea)
    {
        $this->esFechaCrea = $esFechaCrea;

        return $this;
    }

    /**
     * Get esFechaCrea
     *
     * @return \DateTime 
     */
    public function getEsFechaCrea()
    {
        return $this->esFechaCrea;
    }

    /**
     * Set esQuienCrea
     *
     * @param integer $esQuienCrea
     * @return Entidades
     */
    public function setEsQuienCrea($esQuienCrea)
    {
        $this->esQuienCrea = $esQuienCrea;

        return $this;
    }

    /**
     * Get esQuienCrea
     *
     * @return integer 
     */
    public function getEsQuienCrea()
    {
        return $this->esQuienCrea;
    }

    /**
     * Set esFechaModifica
     *
     * @param \DateTime $esFechaModifica
     * @return Entidades
     */
    public function setEsFechaModifica($esFechaModifica)
    {
        $this->esFechaModifica = $esFechaModifica;

        return $this;
    }

    /**
     * Get esFechaModifica
     *
     * @return \DateTime 
     */
    public function getEsFechaModifica()
    {
        return $this->esFechaModifica;
    }

    /**
     * Set esQuienModifica
     *
     * @param integer $esQuienModifica
     * @return Entidades
     */
    public function setEsQuienModifica($esQuienModifica)
    {
        $this->esQuienModifica = $esQuienModifica;

        return $this;
    }

    /**
     * Get esQuienModifica
     *
     * @return integer 
     */
    public function getEsQuienModifica()
    {
        return $this->esQuienModifica;
    }

    /**
     * Set esFechaBorrado
     *
     * @param \DateTime $esFechaBorrado
     * @return Entidades
     */
    public function setEsFechaBorrado($esFechaBorrado)
    {
        $this->esFechaBorrado = $esFechaBorrado;

        return $this;
    }

    /**
     * Get esFechaBorrado
     *
     * @return \DateTime 
     */
    public function getEsFechaBorrado()
    {
        return $this->esFechaBorrado;
    }

    /**
     * Set esQuienBorra
     *
     * @param integer $esQuienBorra
     * @return Entidades
     */
    public function setEsQuienBorra($esQuienBorra)
    {
        $this->esQuienBorra = $esQuienBorra;

        return $this;
    }

    /**
     * Get esQuienBorra
     *
     * @return integer 
     */
    public function getEsQuienBorra()
    {
        return $this->esQuienBorra;
    }

    /**
     * Set esBorradoLogico
     *
     * @param boolean $esBorradoLogico
     * @return Entidades
     */
    public function setEsBorradoLogico($esBorradoLogico)
    {
        $this->esBorradoLogico = $esBorradoLogico;

        return $this;
    }

    /**
     * Get esBorradoLogico
     *
     * @return boolean 
     */
    public function getEsBorradoLogico()
    {
        return $this->esBorradoLogico;
    }
}
