<?php

namespace Dml\TodoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Dml\TodoBundle\Entity\Persona;

/**
 * Description of LoadPersona
 *
 * @author Oswaldo
 */
class LoadPersona extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface {
    
    public function getOrder() { return 1; }

    private $container;

    public function setContainer(ContainerInterface $container = null) {
        $this->container = $container;
    }
    
    public function load(ObjectManager $manager) {
        $personas = array(
            array(
                'pe_cedula'             => '1500583339',
                'pe_nombres'            => 'Oswaldo Ramiro',
                'pe_apellidos'          => 'Rojas Cevallos',
                'pe_fecha_nacimiento'   => new \DateTime('1981-02-21'),
                'email'                 => 'def.3980@gmail.com',
                'pe_usr'                => 'def_3980',
                'salt'                  => NULL,
                'password'              => '39801981',
                'pe_ultimo_ingreso'     => NULL,
                'pe_fecha_crea'         => new \DateTime('2014-02-01 00:00:01'),
                'pe_quien_crea'         => 1,
                'pe_fecha_modifica'     => NULL,
                'pe_quien_modifica'     => NULL,
                'pe_fecha_borrado'      => NULL,
                'pe_quien_borra'        => NULL,
                'pe_borrado_logico'     => false
            ),
            array(
                'pe_cedula'             => '1500699937',
                'pe_nombres'            => 'Susana Tamara',
                'pe_apellidos'          => 'Andy Cerda',
                'pe_fecha_nacimiento'   => new \DateTime('1983-09-20'),
                'email'                 => 'susanatamara@hotmail.com',
                'pe_usr'                => 'tamara',
                'salt'                  => NULL,
                'password'              => '123456',
                'pe_ultimo_ingreso'     => NULL,
                'pe_fecha_crea'         => new \DateTime('2014-02-01 00:00:01'),
                'pe_quien_crea'         => 1,
                'pe_fecha_modifica'     => NULL,
                'pe_quien_modifica'     => NULL,
                'pe_fecha_borrado'      => NULL,
                'pe_quien_borra'        => NULL,
                'pe_borrado_logico'     => false
            ),
        );
        foreach ($personas as $persona):
            $pe = new Persona();
            $pe->setPeCedula($persona['pe_cedula']);
            $pe->setPeNombres($persona['pe_nombres']);
            $pe->setPeApellidos($persona['pe_apellidos']);
            $pe->setPeFechaNacimiento($persona['pe_fecha_nacimiento']);
            $pe->setEmail($persona['email']);
            $pe->setPeUsr($persona['pe_usr']);
            $pe->setSalt($persona['salt']);
            $pe->setPassword($persona['password']);
            $pe->setPeUltimoIngreso($persona['pe_ultimo_ingreso']);
//            $pe->setPePwd(\sha1($persona['pe_usr']));
            $pe->setPeFechaCrea($persona['pe_fecha_crea']);
            $pe->setPeQuienCrea($persona['pe_quien_crea']);
            $pe->setPeFechaModifica($persona['pe_fecha_modifica']);
            $pe->setPeQuienModifica($persona['pe_quien_modifica']);
            $pe->setPeFechaBorrado($persona['pe_fecha_borrado']);
            $pe->setPeQuienBorra($persona['pe_quien_borra']);
            $pe->setPeBorradoLogico($persona['pe_borrado_logico']);
            $manager->persist($pe);
        endforeach;
        $manager->flush();
    }
    
}