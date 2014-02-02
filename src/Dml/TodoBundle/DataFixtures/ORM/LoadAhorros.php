<?php

namespace Dml\TodoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Dml\TodoBundle\Entity\Ahorros;

/**
 * Description of LoadPersona
 *
 * @author Oswaldo
 */
class LoadAhorros extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface {
    
    public function getOrder() { return 5; }

    private $container;

    public function setContainer(ContainerInterface $container = null) {
        $this->container = $container;
    }
    
    public function load(ObjectManager $manager) {
        $ContratarB = $manager->getRepository('TodoBundle:ContratarB')->findAll();
        $TipoCuenta = $manager->getRepository('TodoBundle:TipoCuenta')->find(1);
        foreach ($ContratarB as $c_b):
            switch ($c_b->getCbId()):
                case 7:
                    $Ahorros = array(
                        array(
                            'ah_fecha_creacion' => new \DateTime('2000-02-26'),
                            'ah_numero_cuenta' => '3940694600',
                            'ah_fecha_eliminacion' => NULL,
                            'ah_estado' => true,
                            'ah_fecha_crea' => new \DateTime('2014-02-01 00:00:01'),
                            'ah_quien_crea' => 1,
                            'ah_fecha_modifica' => NULL,
                            'ah_quien_modifica' => NULL
                        ),
                        array(
                            'ah_fecha_creacion' => new \DateTime('2013-05-02'),
                            'ah_numero_cuenta' => '2200555126',
                            'ah_fecha_eliminacion' => NULL,
                            'ah_estado' => true,
                            'ah_fecha_crea' => new \DateTime('2014-02-01 00:00:01'),
                            'ah_quien_crea' => 1,
                            'ah_fecha_modifica' => NULL,
                            'ah_quien_modifica' => NULL
                        ),
                        array(
                            'ah_fecha_creacion' => new \DateTime('2013-05-02'),
                            'ah_numero_cuenta' => '2200555154',
                            'ah_fecha_eliminacion' => NULL,
                            'ah_estado' => true,
                            'ah_fecha_crea' => new \DateTime('2014-02-01 00:00:01'),
                            'ah_quien_crea' => 1,
                            'ah_fecha_modifica' => NULL,
                            'ah_quien_modifica' => NULL
                        ),
                    );
                    foreach ($Ahorros as $ahorro):
                        $ah = new Ahorros();
                        $ah->setAhFechaCreacion($ahorro['ah_fecha_creacion']);
                        $ah->setAhNumeroCuenta($ahorro['ah_numero_cuenta']);
                        $ah->setAhFechaEliminacion($ahorro['ah_fecha_eliminacion']);
                        $ah->setAhEstado($ahorro['ah_estado']);
                        $ah->setAhFechaCrea($ahorro['ah_fecha_crea']);
                        $ah->setAhQuienCrea($ahorro['ah_quien_crea']);
                        $ah->setAhFechaModifica($ahorro['ah_fecha_modifica']);
                        $ah->setAhQuienModifica($ahorro['ah_quien_modifica']);
                        $ah->setContratarBCb($c_b);
                        $ah->setTipoCuentaTc($TipoCuenta);
                        $manager->persist($ah);
                    endforeach;
                break;
            endswitch;
        endforeach;
        $manager->flush();
    }
    
}