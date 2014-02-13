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
            /**
             * Servicios Básicos
             */
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
                'es_quien_modifica' => NULL,
                'es_borrado_logico' => false
            ),
            array(
                'es_entidad' => 'Empresa Eléctrica Quito',
                'es_alias' => 'E.E.Q',
                'es_direccion' => 'Las Casas E1-24 y Av. 10 de Agosto',
                'es_tlf1' => '023964700',
                'es_tlf2' => NULL,
                'es_ext' => NULL,
                'es_sitio_web' => 'http://www.eeq.com.ec/',
                'es_fecha_crea' => new \DateTime('2014-02-01 00:00:01'),
                'es_quien_crea' => 1,
                'es_fecha_modifica' => NULL,
                'es_quien_modifica' => NULL,
                'es_borrado_logico' => false
            ),
            array(
                'es_entidad' => 'NetLife',
                'es_alias' => 'NetLife',
                'es_direccion' => 'Núñez de Vela E3-13 y Atahualpa',
                'es_tlf1' => NULL,
                'es_tlf2' => NULL,
                'es_ext' => NULL,
                'es_sitio_web' => 'http://www.netlife.ec/',
                'es_fecha_crea' => new \DateTime('2014-02-01 00:00:01'),
                'es_quien_crea' => 1,
                'es_fecha_modifica' => NULL,
                'es_quien_modifica' => NULL,
                'es_borrado_logico' => false
            ),
            array(
                'es_entidad' => 'Corporación Nacional de Telecomunicaciones C.N.T. E.P.',
                'es_alias' => 'C.N.T.',
                'es_direccion' => 'Veintimilla E4-66 y Amazonas, Edificio Studio Z',
                'es_tlf1' => '023966102',
                'es_tlf2' => NULL,
                'es_ext' => NULL,
                'es_sitio_web' => 'http://www.cnt.gob.ec/',
                'es_fecha_crea' => new \DateTime('2014-02-01 00:00:01'),
                'es_quien_crea' => 1,
                'es_fecha_modifica' => NULL,
                'es_quien_modifica' => NULL,
                'es_borrado_logico' => false
            ),
            array(
                'es_entidad' => 'Telefonica',
                'es_alias' => 'Movistar',
                'es_direccion' => 'Av. República y Pradera',
                'es_tlf1' => NULL,
                'es_tlf2' => NULL,
                'es_ext' => NULL,
                'es_sitio_web' => 'http://www.movistar.com.ec/',
                'es_fecha_crea' => new \DateTime('2014-02-01 00:00:01'),
                'es_quien_crea' => 1,
                'es_fecha_modifica' => NULL,
                'es_quien_modifica' => NULL,
                'es_borrado_logico' => false
            ),
            array(
                'es_entidad' => 'Conjunto Habitacional Rinconada del Norte - Segunda Etapa',
                'es_alias' => 'Departamento',
                'es_direccion' => 'Av. Juan Molineros y Guacamayos, Bloque 18 Departament 41',
                'es_tlf1' => '023281024',
                'es_tlf2' => NULL,
                'es_ext' => NULL,
                'es_sitio_web' => 'http://www.cnt.gob.ec/',
                'es_fecha_crea' => new \DateTime('2014-02-01 00:00:01'),
                'es_quien_crea' => 1,
                'es_fecha_modifica' => NULL,
                'es_quien_modifica' => NULL,
                'es_borrado_logico' => false
            ),
            /**
             * -----------------------------------------------------------------
             */
            
            /**
             * Bancos
             */
            array(
                'es_entidad' => 'Banco del Pichincha',
                'es_alias' => 'Banco Pichincha',
                'es_direccion' => 'Av. Amazonas 4560 Y Pereira',
                'es_tlf1' => '022999999',
                'es_tlf2' => NULL,
                'es_ext' => NULL,
                'es_sitio_web' => 'http://www.pichincha.com/',
                'es_fecha_crea' => new \DateTime('2014-02-01 00:00:01'),
                'es_quien_crea' => 1,
                'es_fecha_modifica' => NULL,
                'es_quien_modifica' => NULL,
                'es_borrado_logico' => false
            ),
            array(
                'es_entidad' => 'Banco Internacional',
                'es_alias' => 'Banco Internacional',
                'es_direccion' => 'Av. Amazonas y 9 de Octubre',
                'es_tlf1' => NULL,
                'es_tlf2' => NULL,
                'es_ext' => NULL,
                'es_sitio_web' => 'http://www.bancointernacional.com.ec/bcointernacional/',
                'es_fecha_crea' => new \DateTime('2014-02-01 00:00:01'),
                'es_quien_crea' => 1,
                'es_fecha_modifica' => NULL,
                'es_quien_modifica' => NULL,
                'es_borrado_logico' => false
            ),
            array(
                'es_entidad' => 'Banco del Austro',
                'es_alias' => 'Banco Austro',
                'es_direccion' => 'Av. Amazonas y Roca',
                'es_tlf1' => NULL,
                'es_tlf2' => NULL,
                'es_ext' => NULL,
                'es_sitio_web' => 'http://www.bancodelaustro.com/',
                'es_fecha_crea' => new \DateTime('2014-02-01 00:00:01'),
                'es_quien_crea' => 1,
                'es_fecha_modifica' => NULL,
                'es_quien_modifica' => NULL,
                'es_borrado_logico' => false
            ),
            /**
             * -----------------------------------------------------------------
             */

            /**
             * Instituciones Públicas
             */
            array(
                'es_entidad' => 'Instituto Técnico Fiscal Tena',
                'es_alias' => 'Colegio Nacional',
                'es_direccion' => 'Av. Jumandy (Sector Dos Ríos)',
                'es_tlf1' => NULL,
                'es_tlf2' => NULL,
                'es_ext' => NULL,
                'es_sitio_web' => NULL,
                'es_fecha_crea' => new \DateTime('2014-02-01 00:00:01'),
                'es_quien_crea' => 1,
                'es_fecha_modifica' => NULL,
                'es_quien_modifica' => NULL,
                'es_borrado_logico' => false
            ),
            array(
                'es_entidad' => 'Servicio d Contratación de Obras',
                'es_alias' => 'S.E.C.O.B.',
                'es_direccion' => 'Av. 10 de Agosto y Santiago',
                'es_tlf1' => NULL,
                'es_tlf2' => NULL,
                'es_ext' => NULL,
                'es_sitio_web' => 'http://www.ico.gob.ec/',
                'es_fecha_crea' => new \DateTime('2014-02-01 00:00:01'),
                'es_quien_crea' => 1,
                'es_fecha_modifica' => NULL,
                'es_quien_modifica' => NULL,
                'es_borrado_logico' => false
            ),
            array(
                'es_entidad' => 'Ministerio del Ambiente',
                'es_alias' => 'M.A.E.',
                'es_direccion' => 'Av. Madrid y Andalucia',
                'es_tlf1' => NULL,
                'es_tlf2' => NULL,
                'es_ext' => NULL,
                'es_sitio_web' => 'http://www.ambiente.gob.ec/',
                'es_fecha_crea' => new \DateTime('2014-02-01 00:00:01'),
                'es_quien_crea' => 1,
                'es_fecha_modifica' => NULL,
                'es_quien_modifica' => NULL,
                'es_borrado_logico' => false
            ),
            /**
             * -----------------------------------------------------------------
             */
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
            $e_sbbip->setEsBorradoLogico($e['es_borrado_logico']);
            $manager->persist($e_sbbip);
        endforeach;
        $manager->flush();
    }
    
}