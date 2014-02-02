<?php

namespace Dml\TodoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Dml\TodoBundle\Entity\EntidadSbbip;

/**
 * Description of LoadPersona
 *
 * @author Oswaldo
 */
class LoadEntidadSbbip extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface {
    
    public function getOrder() { return 2; }

    private $container;

    public function setContainer(ContainerInterface $container = null) {
        $this->container = $container;
    }
    
    public function load(ObjectManager $manager) {
        /**
         * Ingresando Entidades que brindan 
         *  - Servicios Básicos
         *  - Actuan como Bancos
         *  - E Instituciones Públicas
         */
        $EntidadSbbip = array(
            array(
                'es_entidad' => 'Empresa Pública Metropolitana de Agua Potable Y Saneamiento',
                'es_alias' => 'E.P.M.A.P.S',
                'es_direccion' => 'Av. Mariana de Jesús S/N y Alemania',
                'es_tlf1' => NULL,
                'es_tlf2' => NULL,
                'es_ext' => NULL,
                'es_sitio_web' => 'http://www.aguaquito.gob.ec/',
                'es_fecha_crea' => new \DateTime('2014-02-01 00:00:01'),
                'es_quien_crea' => 1,
                'es_fecha_modifica' => NULL,
                'es_quien_modifica' => NULL
            ),
        );
        foreach ($EntidadSbbip as $e):
            $e_sbbip = new EntidadSbbip();
            $e_sbbip->setEsEntidad($e['es_entidad']);
            $e_sbbip->setEsAlias($e['es_alias']);
            $e_sbbip->setEsDireccion($e['es_direccion']);
            $e_sbbip->setEsTlf1($e['es_tlf1']);
            $e_sbbip->setEsTlf2($e['es_tlf2']);
            $e_sbbip->setEsExt($e['es_ext']);
            $e_sbbip->setEsSitioWeb($e['es_sitio_web']);
            $e_sbbip->setEsFechaCrea($e['es_fecha_crea']);
            $e_sbbip->setEsQuienCrea($e['es_quien_crea']);
            $e_sbbip->setEsFechaModifica($e['es_fecha_modifica']);
            $e_sbbip->setEsQuienModifica($e['es_quien_modifica']);
            $manager->persist($e_sbbip);
        endforeach;
        $manager->flush();
    }
    
}