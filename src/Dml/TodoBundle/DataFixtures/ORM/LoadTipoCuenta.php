<?php

namespace Dml\TodoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Dml\TodoBundle\Entity\TipoCuenta;

/**
 * Description of LoadPersona
 *
 * @author Oswaldo
 */
class LoadTipoCuenta extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface {
    
    public function getOrder() { return 3; }

    private $container;

    public function setContainer(ContainerInterface $container = null) {
        $this->container = $container;
    }
    
    public function load(ObjectManager $manager) {
        /**
         * Ingresando Tipos de cuentas que puede tener una persona en
         * una Entidad Bancaria
         */
        $TipoCuenta = array(
            array(
                'tc_nombre' => 'Ahorros',
                'tc_fecha_crea' => new \DateTime('2014-02-01 00:00:01'),
                'tc_quien_crea' => 1,
                'tc_fecha_modifica' => NULL,
                'tc_quien_modifica' => NULL,
                'tc_fecha_borrado' => NULL,
                'tc_quien_borra' => NULL,
                'tc_borrado_logico' => false
            ),
            array(
                'tc_nombre' => 'Corriente',
                'tc_fecha_crea' => new \DateTime('2014-02-01 00:00:01'),
                'tc_quien_crea' => 1,
                'tc_fecha_modifica' => NULL,
                'tc_quien_modifica' => NULL,
                'tc_fecha_borrado' => NULL,
                'tc_quien_borra' => NULL,
                'tc_borrado_logico' => false
            ),
        );
        foreach ($TipoCuenta as $t_c):
            $tc = new TipoCuenta();
            $tc->setTcNombre($t_c['tc_nombre']);
            $tc->setTcFechaCrea($t_c['tc_fecha_crea']);
            $tc->setTcQuienCrea($t_c['tc_quien_crea']);
            $tc->setTcFechaModifica($t_c['tc_fecha_modifica']);
            $tc->setTcQuienModifica($t_c['tc_quien_modifica']);
            $tc->setTcFechaBorrado($t_c['tc_fecha_borrado']);
            $tc->setTcQuienBorra($t_c['tc_quien_borra']);
            $tc->setTcBorradoLogico($t_c['tc_borrado_logico']);
            $manager->persist($tc);
        endforeach;
        $manager->flush();
    }
    
}