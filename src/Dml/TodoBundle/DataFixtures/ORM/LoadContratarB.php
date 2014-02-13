<?php

namespace Dml\TodoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Dml\TodoBundle\Entity\ContratarB;

/**
 * Description of LoadPersona
 *
 * @author Oswaldo
 */
class LoadContratarB extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface {
    
    public function getOrder() { return 4; }

    private $container;

    public function setContainer(ContainerInterface $container = null) {
        $this->container = $container;
    }
    
    public function load(ObjectManager $manager) {
        $EntidadSbbip = $manager->getRepository('TodoBundle:EntidadSbbip')->findAll();
        $Persona = $manager->getRepository('TodoBundle:Persona')->findBy(array('peCedula' => '1500583339'));
        foreach ($EntidadSbbip as $e_sbbip):
            switch ($e_sbbip->getEsAlias()):
                case 'E.P.M.A.P.S':
                    $ContratarB = array(
                        array(
                            'cb_fecha_contrato' => new \DateTime('2004-10-01'),
                            'cb_fecha_crea' => new \DateTime('2014-02-01 00:00:01'),
                            'cb_quien_crea' => 1,
                            'cb_fecha_modifica' => NULL,
                            'cb_quien_modifica' => NULL,
                            'cb_borrado_logico' => false
                        ),
                    );
                    foreach ($ContratarB as $c_b):
                        $cb = new ContratarB();
                        $cb->setCbFechaContrato($c_b['cb_fecha_contrato']);
                        $cb->setCbFechaCrea($c_b['cb_fecha_crea']);
                        $cb->setCbQuienCrea($c_b['cb_quien_crea']);
                        $cb->setCbFechaModifica($c_b['cb_fecha_modifica']);
                        $cb->setCbQuienModifica($c_b['cb_quien_modifica']);
                        $cb->setCbBorradoLogico($c_b['cb_borrado_logico']);
                        $cb->setPersonaPe(reset($Persona));
                        $cb->setEntidadSbbipEs($e_sbbip);
                        $manager->persist($cb);
                    endforeach;
                break;
                case 'E.E.Q':
                    $ContratarB = array(
                        array(
                            'cb_fecha_contrato' => new \DateTime('2004-11-01'),
                            'cb_fecha_crea' => new \DateTime('2014-02-01 00:00:01'),
                            'cb_quien_crea' => 1,
                            'cb_fecha_modifica' => NULL,
                            'cb_quien_modifica' => NULL,
                            'cb_borrado_logico' => false
                        ),
                    );
                    foreach ($ContratarB as $c_b):
                        $cb = new ContratarB();
                        $cb->setCbFechaContrato($c_b['cb_fecha_contrato']);
                        $cb->setCbFechaCrea($c_b['cb_fecha_crea']);
                        $cb->setCbQuienCrea($c_b['cb_quien_crea']);
                        $cb->setCbFechaModifica($c_b['cb_fecha_modifica']);
                        $cb->setCbQuienModifica($c_b['cb_quien_modifica']);
                        $cb->setCbBorradoLogico($c_b['cb_borrado_logico']);
                        $cb->setPersonaPe(reset($Persona));
                        $cb->setEntidadSbbipEs($e_sbbip);
                        $manager->persist($cb);
                    endforeach;
                break;
                case 'NetLife':
                    $ContratarB = array(
                        array(
                            'cb_fecha_contrato' => new \DateTime('2013-01-05'),
                            'cb_fecha_crea' => new \DateTime('2014-02-01 00:00:01'),
                            'cb_quien_crea' => 1,
                            'cb_fecha_modifica' => NULL,
                            'cb_quien_modifica' => NULL,
                            'cb_borrado_logico' => false
                        ),
                    );
                    foreach ($ContratarB as $c_b):
                        $cb = new ContratarB();
                        $cb->setCbFechaContrato($c_b['cb_fecha_contrato']);
                        $cb->setCbFechaCrea($c_b['cb_fecha_crea']);
                        $cb->setCbQuienCrea($c_b['cb_quien_crea']);
                        $cb->setCbFechaModifica($c_b['cb_fecha_modifica']);
                        $cb->setCbQuienModifica($c_b['cb_quien_modifica']);
                        $cb->setCbBorradoLogico($c_b['cb_borrado_logico']);
                        $cb->setPersonaPe(reset($Persona));
                        $cb->setEntidadSbbipEs($e_sbbip);
                        $manager->persist($cb);
                    endforeach;
                break;
                case 'C.N.T.':
                    $ContratarB = array(
                        array(
                            'cb_fecha_contrato' => new \DateTime('2004-12-01'),
                            'cb_fecha_crea' => new \DateTime('2014-02-01 00:00:01'),
                            'cb_quien_crea' => 1,
                            'cb_fecha_modifica' => NULL,
                            'cb_quien_modifica' => NULL,
                            'cb_borrado_logico' => false
                        ),
                    );
                    foreach ($ContratarB as $c_b):
                        $cb = new ContratarB();
                        $cb->setCbFechaContrato($c_b['cb_fecha_contrato']);
                        $cb->setCbFechaCrea($c_b['cb_fecha_crea']);
                        $cb->setCbQuienCrea($c_b['cb_quien_crea']);
                        $cb->setCbFechaModifica($c_b['cb_fecha_modifica']);
                        $cb->setCbQuienModifica($c_b['cb_quien_modifica']);
                        $cb->setCbBorradoLogico($c_b['cb_borrado_logico']);
                        $cb->setPersonaPe(reset($Persona));
                        $cb->setEntidadSbbipEs($e_sbbip);
                        $manager->persist($cb);
                    endforeach;
                break;
                case 'Movistar':
                    $ContratarB = array(
                        array(
                            'cb_fecha_contrato' => new \DateTime('2003-09-06'),
                            'cb_fecha_crea' => new \DateTime('2014-02-01 00:00:01'),
                            'cb_quien_crea' => 1,
                            'cb_fecha_modifica' => NULL,
                            'cb_quien_modifica' => NULL,
                            'cb_borrado_logico' => false
                        ),
                    );
                    foreach ($ContratarB as $c_b):
                        $cb = new ContratarB();
                        $cb->setCbFechaContrato($c_b['cb_fecha_contrato']);
                        $cb->setCbFechaCrea($c_b['cb_fecha_crea']);
                        $cb->setCbQuienCrea($c_b['cb_quien_crea']);
                        $cb->setCbFechaModifica($c_b['cb_fecha_modifica']);
                        $cb->setCbQuienModifica($c_b['cb_quien_modifica']);
                        $cb->setCbBorradoLogico($c_b['cb_borrado_logico']);
                        $cb->setPersonaPe(reset($Persona));
                        $cb->setEntidadSbbipEs($e_sbbip);
                        $manager->persist($cb);
                    endforeach;
                break;
                case 'Departamento':
                    $ContratarB = array(
                        array(
                            'cb_fecha_contrato' => new \DateTime('2004-10-01'),
                            'cb_fecha_crea' => new \DateTime('2014-02-01 00:00:01'),
                            'cb_quien_crea' => 1,
                            'cb_fecha_modifica' => NULL,
                            'cb_quien_modifica' => NULL,
                            'cb_borrado_logico' => false
                        ),
                    );
                    foreach ($ContratarB as $c_b):
                        $cb = new ContratarB();
                        $cb->setCbFechaContrato($c_b['cb_fecha_contrato']);
                        $cb->setCbFechaCrea($c_b['cb_fecha_crea']);
                        $cb->setCbQuienCrea($c_b['cb_quien_crea']);
                        $cb->setCbFechaModifica($c_b['cb_fecha_modifica']);
                        $cb->setCbQuienModifica($c_b['cb_quien_modifica']);
                        $cb->setCbBorradoLogico($c_b['cb_borrado_logico']);
                        $cb->setPersonaPe(reset($Persona));
                        $cb->setEntidadSbbipEs($e_sbbip);
                        $manager->persist($cb);
                    endforeach;
                break;
                case 'Banco Pichincha':
                    $ContratarB = array(
                        array(
                            'cb_fecha_contrato' => new \DateTime('2000-02-26'),
                            'cb_fecha_crea' => new \DateTime('2014-02-01 00:00:01'),
                            'cb_quien_crea' => 1,
                            'cb_fecha_modifica' => NULL,
                            'cb_quien_modifica' => NULL,
                            'cb_borrado_logico' => false
                        ),
                    );
                    foreach ($ContratarB as $c_b):
                        $cb = new ContratarB();
                        $cb->setCbFechaContrato($c_b['cb_fecha_contrato']);
                        $cb->setCbFechaCrea($c_b['cb_fecha_crea']);
                        $cb->setCbQuienCrea($c_b['cb_quien_crea']);
                        $cb->setCbFechaModifica($c_b['cb_fecha_modifica']);
                        $cb->setCbQuienModifica($c_b['cb_quien_modifica']);
                        $cb->setCbBorradoLogico($c_b['cb_borrado_logico']);
                        $cb->setPersonaPe(reset($Persona));
                        $cb->setEntidadSbbipEs($e_sbbip);
                        $manager->persist($cb);
                    endforeach;
                break;
                case 'Banco Internacional':
                    $ContratarB = array(
                        array(
                            'cb_fecha_contrato' => new \DateTime('2010-10-13'),
                            'cb_fecha_crea' => new \DateTime('2014-02-01 00:00:01'),
                            'cb_quien_crea' => 1,
                            'cb_fecha_modifica' => NULL,
                            'cb_quien_modifica' => NULL,
                            'cb_borrado_logico' => false
                        ),
                    );
                    foreach ($ContratarB as $c_b):
                        $cb = new ContratarB();
                        $cb->setCbFechaContrato($c_b['cb_fecha_contrato']);
                        $cb->setCbFechaCrea($c_b['cb_fecha_crea']);
                        $cb->setCbQuienCrea($c_b['cb_quien_crea']);
                        $cb->setCbFechaModifica($c_b['cb_fecha_modifica']);
                        $cb->setCbQuienModifica($c_b['cb_quien_modifica']);
                        $cb->setCbBorradoLogico($c_b['cb_borrado_logico']);
                        $cb->setPersonaPe(reset($Persona));
                        $cb->setEntidadSbbipEs($e_sbbip);
                        $manager->persist($cb);
                    endforeach;
                break;
                case 'Colegio Nacional':
                    $ContratarB = array(
                        array(
                            'cb_fecha_contrato' => new \DateTime('2001-04-15'),
                            'cb_fecha_crea' => new \DateTime('2014-02-01 00:00:01'),
                            'cb_quien_crea' => 1,
                            'cb_fecha_modifica' => NULL,
                            'cb_quien_modifica' => NULL,
                            'cb_borrado_logico' => false
                        ),
                    );
                    foreach ($ContratarB as $c_b):
                        $cb = new ContratarB();
                        $cb->setCbFechaContrato($c_b['cb_fecha_contrato']);
                        $cb->setCbFechaCrea($c_b['cb_fecha_crea']);
                        $cb->setCbQuienCrea($c_b['cb_quien_crea']);
                        $cb->setCbFechaModifica($c_b['cb_fecha_modifica']);
                        $cb->setCbQuienModifica($c_b['cb_quien_modifica']);
                        $cb->setCbBorradoLogico($c_b['cb_borrado_logico']);
                        $cb->setPersonaPe(reset($Persona));
                        $cb->setEntidadSbbipEs($e_sbbip);
                        $manager->persist($cb);
                    endforeach;
                break;
                case 'S.E.C.O.B.':
                    $ContratarB = array(
                        array(
                            'cb_fecha_contrato' => new \DateTime('2012-01-03'),
                            'cb_fecha_crea' => new \DateTime('2014-02-01 00:00:01'),
                            'cb_quien_crea' => 1,
                            'cb_fecha_modifica' => NULL,
                            'cb_quien_modifica' => NULL,
                            'cb_borrado_logico' => false
                        ),
                    );
                    foreach ($ContratarB as $c_b):
                        $cb = new ContratarB();
                        $cb->setCbFechaContrato($c_b['cb_fecha_contrato']);
                        $cb->setCbFechaCrea($c_b['cb_fecha_crea']);
                        $cb->setCbQuienCrea($c_b['cb_quien_crea']);
                        $cb->setCbFechaModifica($c_b['cb_fecha_modifica']);
                        $cb->setCbQuienModifica($c_b['cb_quien_modifica']);
                        $cb->setCbBorradoLogico($c_b['cb_borrado_logico']);
                        $cb->setPersonaPe(reset($Persona));
                        $cb->setEntidadSbbipEs($e_sbbip);
                        $manager->persist($cb);
                    endforeach;
                break;
                case 'M.A.E.':
                    $ContratarB = array(
                        array(
                            'cb_fecha_contrato' => new \DateTime('2013-10-01'),
                            'cb_fecha_crea' => new \DateTime('2014-02-01 00:00:01'),
                            'cb_quien_crea' => 1,
                            'cb_fecha_modifica' => NULL,
                            'cb_quien_modifica' => NULL,
                            'cb_borrado_logico' => false
                        ),
                    );
                    foreach ($ContratarB as $c_b):
                        $cb = new ContratarB();
                        $cb->setCbFechaContrato($c_b['cb_fecha_contrato']);
                        $cb->setCbFechaCrea($c_b['cb_fecha_crea']);
                        $cb->setCbQuienCrea($c_b['cb_quien_crea']);
                        $cb->setCbFechaModifica($c_b['cb_fecha_modifica']);
                        $cb->setCbQuienModifica($c_b['cb_quien_modifica']);
                        $cb->setCbBorradoLogico($c_b['cb_borrado_logico']);
                        $cb->setPersonaPe(reset($Persona));
                        $cb->setEntidadSbbipEs($e_sbbip);
                        $manager->persist($cb);
                    endforeach;
                break;
            endswitch;
        endforeach;
        $manager->flush();
    }
    
}