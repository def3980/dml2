<?php

namespace Dml\TodoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Dml\TodoBundle\Entity\Entidades;

/**
 * Description of LoadPersona
 *
 * @author Oswaldo
 */
class LoadEntidades extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface {
    
    public function getOrder() { return 2; }

    private $container;

    public function setContainer(ContainerInterface $container = null) {
        $this->container = $container;
    }
    
    public function load(ObjectManager $manager) {
        /**
         * Ingresando Entidades que brindan 
         *  - Servicios Básicos
         *  - Bancos
         *  - Instituciones Públicas, Privadas
         */
        $Entidades = array(
            /**
             * Servicios Básicos
             */
            array(
                'es_entidad' => 'Empresa Pública Metropolitana de Agua Potable Y Saneamiento',
                'es_alias' => 'E.P.M.A.P.S',
                'es_direccion' => 'Av. Mariana de Jesús S/N y Alemania',
                'es_tlf1' => NULL,
                'es_ext1' => NULL,
                'es_tlf2' => NULL,
                'es_ext2' => NULL,
                'es_sitio_web' => 'http://www.aguaquito.gob.ec/',
                'es_fecha_crea' => new \DateTime('2014-02-01 00:00:01'),
                'es_quien_crea' => 1,
                'es_fecha_modifica' => NULL,
                'es_quien_modifica' => NULL,
                'es_fecha_borrado' => NULL,
                'es_quien_borra' => NULL,
                'es_borrado_logico' => false
            ),
            array(
                'es_entidad' => 'Empresa Eléctrica Quito',
                'es_alias' => 'E.E.Q',
                'es_direccion' => 'Las Casas E1-24 y Av. 10 de Agosto',
                'es_tlf1' => '023964700',
                'es_ext1' => NULL,
                'es_tlf2' => NULL,
                'es_ext2' => NULL,
                'es_sitio_web' => 'http://www.eeq.com.ec/',
                'es_fecha_crea' => new \DateTime('2014-02-01 00:00:01'),
                'es_quien_crea' => 1,
                'es_fecha_modifica' => NULL,
                'es_quien_modifica' => NULL,
                'es_fecha_borrado' => NULL,
                'es_quien_borra' => NULL,
                'es_borrado_logico' => false
            ),
            array(
                'es_entidad' => 'NetLife',
                'es_alias' => 'NetLife',
                'es_direccion' => 'Núñez de Vela E3-13 y Atahualpa',
                'es_tlf1' => NULL,
                'es_ext1' => NULL,
                'es_tlf2' => NULL,
                'es_ext2' => NULL,
                'es_sitio_web' => 'http://www.netlife.ec/',
                'es_fecha_crea' => new \DateTime('2014-02-01 00:00:01'),
                'es_quien_crea' => 1,
                'es_fecha_modifica' => NULL,
                'es_quien_modifica' => NULL,
                'es_fecha_borrado' => NULL,
                'es_quien_borra' => NULL,
                'es_borrado_logico' => false
            ),
            array(
                'es_entidad' => 'Corporación Nacional de Telecomunicaciones C.N.T. E.P.',
                'es_alias' => 'C.N.T.',
                'es_direccion' => 'Veintimilla E4-66 y Amazonas, Edificio Studio Z',
                'es_tlf1' => '023966102',
                'es_ext1' => NULL,
                'es_tlf2' => NULL,
                'es_ext2' => NULL,
                'es_sitio_web' => 'http://www.cnt.gob.ec/',
                'es_fecha_crea' => new \DateTime('2014-02-01 00:00:01'),
                'es_quien_crea' => 1,
                'es_fecha_modifica' => NULL,
                'es_quien_modifica' => NULL,
                'es_fecha_borrado' => NULL,
                'es_quien_borra' => NULL,
                'es_borrado_logico' => false
            ),
            array(
                'es_entidad' => 'Telefonica',
                'es_alias' => 'Movistar',
                'es_direccion' => 'Av. República y Pradera',
                'es_tlf1' => NULL,
                'es_ext1' => NULL,
                'es_tlf2' => NULL,
                'es_ext2' => NULL,
                'es_sitio_web' => 'http://www.movistar.com.ec/',
                'es_fecha_crea' => new \DateTime('2014-02-01 00:00:01'),
                'es_quien_crea' => 1,
                'es_fecha_modifica' => NULL,
                'es_quien_modifica' => NULL,
                'es_fecha_borrado' => NULL,
                'es_quien_borra' => NULL,
                'es_borrado_logico' => false
            ),
            array(
                'es_entidad' => 'Conjunto Habitacional Rinconada del Norte - Segunda Etapa',
                'es_alias' => 'Departamento',
                'es_direccion' => 'Av. Juan Molineros y Guacamayos, Bloque 18 Departament 41',
                'es_tlf1' => '023281024',
                'es_ext1' => NULL,
                'es_tlf2' => NULL,
                'es_ext2' => NULL,
                'es_sitio_web' => 'http://www.cnt.gob.ec/',
                'es_fecha_crea' => new \DateTime('2014-02-01 00:00:01'),
                'es_quien_crea' => 1,
                'es_fecha_modifica' => NULL,
                'es_quien_modifica' => NULL,
                'es_fecha_borrado' => NULL,
                'es_quien_borra' => NULL,
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
                'es_ext1' => NULL,
                'es_tlf2' => NULL,
                'es_ext2' => NULL,
                'es_sitio_web' => 'http://www.pichincha.com/',
                'es_fecha_crea' => new \DateTime('2014-02-01 00:00:01'),
                'es_quien_crea' => 1,
                'es_fecha_modifica' => NULL,
                'es_quien_modifica' => NULL,
                'es_fecha_borrado' => NULL,
                'es_quien_borra' => NULL,
                'es_borrado_logico' => false
            ),
            array(
                'es_entidad' => 'Banco Internacional',
                'es_alias' => 'Banco Internacional',
                'es_direccion' => 'Av. Amazonas y 9 de Octubre',
                'es_tlf1' => NULL,
                'es_ext1' => NULL,
                'es_tlf2' => NULL,
                'es_ext2' => NULL,
                'es_sitio_web' => 'http://www.bancointernacional.com.ec/bcointernacional/',
                'es_fecha_crea' => new \DateTime('2014-02-01 00:00:01'),
                'es_quien_crea' => 1,
                'es_fecha_modifica' => NULL,
                'es_quien_modifica' => NULL,
                'es_fecha_borrado' => NULL,
                'es_quien_borra' => NULL,
                'es_borrado_logico' => false
            ),
            array(
                'es_entidad' => 'Banco del Austro',
                'es_alias' => 'Banco Austro',
                'es_direccion' => 'Av. Amazonas y Roca',
                'es_tlf1' => NULL,
                'es_ext1' => NULL,
                'es_tlf2' => NULL,
                'es_ext2' => NULL,
                'es_sitio_web' => 'http://www.bancodelaustro.com/',
                'es_fecha_crea' => new \DateTime('2014-02-01 00:00:01'),
                'es_quien_crea' => 1,
                'es_fecha_modifica' => NULL,
                'es_quien_modifica' => NULL,
                'es_fecha_borrado' => NULL,
                'es_quien_borra' => NULL,
                'es_borrado_logico' => false
            ),
            array(
                'es_entidad' => 'Banco de la Producción',
                'es_alias' => 'Produbanco',
                'es_direccion' => 'Av. Amazonas N35-211 y Japón',
                'es_tlf1' => '022999000',
                'es_ext1' => NULL,
                'es_tlf2' => NULL,
                'es_ext2' => NULL,
                'es_sitio_web' => 'https://www.produbanco.com/GFPNet/',
                'es_fecha_crea' => new \DateTime('2014-06-06 14:16:21'),
                'es_quien_crea' => 1,
                'es_fecha_modifica' => NULL,
                'es_quien_modifica' => NULL,
                'es_fecha_borrado' => NULL,
                'es_quien_borra' => NULL,
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
                'es_ext1' => NULL,
                'es_tlf2' => NULL,
                'es_ext2' => NULL,
                'es_sitio_web' => NULL,
                'es_fecha_crea' => new \DateTime('2014-02-01 00:00:01'),
                'es_quien_crea' => 1,
                'es_fecha_modifica' => NULL,
                'es_quien_modifica' => NULL,
                'es_fecha_borrado' => NULL,
                'es_quien_borra' => NULL,
                'es_borrado_logico' => false
            ),
            array(
                'es_entidad' => 'Servicio de Contratación de Obras',
                'es_alias' => 'S.E.C.O.B.',
                'es_direccion' => 'Av. 10 de Agosto y Santiago',
                'es_tlf1' => NULL,
                'es_ext1' => NULL,
                'es_tlf2' => NULL,
                'es_ext2' => NULL,
                'es_sitio_web' => 'http://www.ico.gob.ec/',
                'es_fecha_crea' => new \DateTime('2014-02-01 00:00:01'),
                'es_quien_crea' => 1,
                'es_fecha_modifica' => NULL,
                'es_quien_modifica' => NULL,
                'es_fecha_borrado' => NULL,
                'es_quien_borra' => NULL,
                'es_borrado_logico' => false
            ),
            array(
                'es_entidad' => 'Ministerio del Ambiente',
                'es_alias' => 'M.A.E.',
                'es_direccion' => 'Av. Madrid y Andalucia',
                'es_tlf1' => NULL,
                'es_ext1' => NULL,
                'es_tlf2' => NULL,
                'es_ext2' => NULL,
                'es_sitio_web' => 'http://www.ambiente.gob.ec/',
                'es_fecha_crea' => new \DateTime('2014-02-01 00:00:01'),
                'es_quien_crea' => 1,
                'es_fecha_modifica' => NULL,
                'es_quien_modifica' => NULL,
                'es_fecha_borrado' => NULL,
                'es_quien_borra' => NULL,
                'es_borrado_logico' => false
            ),
            /**
             * -----------------------------------------------------------------
             */
            
            /**
             * Instituciones Privadas
             */
            array(
                'es_entidad' => 'Bayteq - Software & Services',
                'es_alias' => 'Bayteq',
                'es_direccion' => 'Av. 12 de Octubre y Gral. Francisco Salazar (Sector La Floresta). Edificio Torre Sol Verde, Piso 6',
                'es_tlf1' => '022505002',
                'es_ext1' => '102',
                'es_tlf2' => NULL,
                'es_ext2' => NULL,
                'es_sitio_web' => 'http://www.bayteq.com/',
                'es_fecha_crea' => new \DateTime('2014-05-19 09:01:01'),
                'es_quien_crea' => 1,
                'es_fecha_modifica' => NULL,
                'es_quien_modifica' => NULL,
                'es_fecha_borrado' => NULL,
                'es_quien_borra' => NULL,
                'es_borrado_logico' => false
            ),
            /**
             * -----------------------------------------------------------------
             */
        );
        foreach ($Entidades as $e):
            $e_es = new Entidades();
            $e_es->setEsEntidad($e['es_entidad']);
            $e_es->setEsAlias($e['es_alias']);
            $e_es->setEsDireccion($e['es_direccion']);
            $e_es->setEsTlf1($e['es_tlf1']);
            $e_es->setEsExt1($e['es_ext1']);
            $e_es->setEsTlf2($e['es_tlf2']);
            $e_es->setEsExt2($e['es_ext2']);
            $e_es->setEsSitioWeb($e['es_sitio_web']);
            $e_es->setEsFechaCrea($e['es_fecha_crea']);
            $e_es->setEsQuienCrea($e['es_quien_crea']);
            $e_es->setEsFechaModifica($e['es_fecha_modifica']);
            $e_es->setEsQuienModifica($e['es_quien_modifica']);
            $e_es->setEsFechaBorrado($e['es_fecha_borrado']);
            $e_es->setEsQuienBorra($e['es_quien_borra']);
            $e_es->setEsBorradoLogico($e['es_borrado_logico']);
            $manager->persist($e_es);
        endforeach;
        $manager->flush();
    }
    
}