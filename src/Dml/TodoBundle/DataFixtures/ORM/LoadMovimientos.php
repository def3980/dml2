<?php

namespace Dml\TodoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Dml\TodoBundle\Entity\Movimientos;

/**
 * Description of LoadPersona
 *
 * @author Oswaldo
 */
class LoadMovimientos extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface {
    
    public function getOrder() { return 6; }

    private $container;

    public function setContainer(ContainerInterface $container = null) {
        $this->container = $container;
    }
    
    public function load(ObjectManager $manager) {
        $Ahorros = $manager->getRepository('TodoBundle:Ahorros')->findAll();
        foreach ($Ahorros as $ah):
            switch ($ah->getAhNumeroCuenta()):
                case '3940694600':
                    $movimientos = array(
                        array('mo_fecha' => new \DateTime('2014-01-31'), 'mo_concepto' => '13051694-MOVISTAR -CB-7872717', 'mo_tipo' => 'D', 'mo_documento' => '0007290871', 'mo_oficina' => 'CENTRO DE SERVIC. OPERAT. SS.', 'mo_monto' => 11.20, 'mo_saldo' => 6.95, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-31'), 'mo_concepto' => 'RETIRO ATM BP D/U SALESIANA', 'mo_tipo' => 'D', 'mo_documento' => '0005792799', 'mo_oficina' => 'CENTRO DE ACOPIO NORTE', 'mo_monto' => 10.00, 'mo_saldo' => 18.15, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-24'), 'mo_concepto' => 'CONSUMO VISA NA DISTRIFUEL PETROCOMERC', 'mo_tipo' => 'D', 'mo_documento' => '0008709576', 'mo_oficina' => 'INSTITUCIONAL SS.CC.', 'mo_monto' => 15.26, 'mo_saldo' => 28.15, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-23'), 'mo_concepto' => 'CONSUMO DATA AKI MOLINEROS 161', 'mo_tipo' => 'D', 'mo_documento' => '0007475500', 'mo_oficina' => 'INSTITUCIONAL SS.CC.', 'mo_monto' => 76.52, 'mo_saldo' => 43.41, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-22'), 'mo_concepto' => 'TRANSFERENCIA INTERNET', 'mo_tipo' => 'C', 'mo_documento' => '0007807969', 'mo_oficina' => 'AG. NORTE', 'mo_monto' => 100.00, 'mo_saldo' => 119.93, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-17'), 'mo_concepto' => '12963523-MEGADATOS S.A -CB-1500583339', 'mo_tipo' => 'D', 'mo_documento' => '0003048042', 'mo_oficina' => 'CENTRO DE SERVIC. OPERAT. SS.', 'mo_monto' => 76.15, 'mo_saldo' => 19.93, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-16'), 'mo_concepto' => '12959167-MOVISTAR -CB-22783500', 'mo_tipo' => 'D', 'mo_documento' => '0007687915', 'mo_oficina' => 'CENTRO DE SERVIC. OPERAT. SS.', 'mo_monto' => 37.46, 'mo_saldo' => 96.08, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-16'), 'mo_concepto' => '12959167-MOVISTAR -CB-7872717', 'mo_tipo' => 'D', 'mo_documento' => '0007574084', 'mo_oficina' => 'CENTRO DE SERVIC. OPERAT. SS.', 'mo_monto' => 2.02, 'mo_saldo' => 133.54, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-16'), 'mo_concepto' => 'RETIRO ATM BP N/EL GIRON-3', 'mo_tipo' => 'D', 'mo_documento' => '0004930365', 'mo_oficina' => 'EL GIRON', 'mo_monto' => 20.00, 'mo_saldo' => 135.56, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-15'), 'mo_concepto' => '3940694600/0995935959', 'mo_tipo' => 'D', 'mo_documento' => '0003543344', 'mo_oficina' => 'AG. NORTE', 'mo_monto' => 10.00, 'mo_saldo' => 155.56, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-14'), 'mo_concepto' => 'SPI COSTO OPER. CASH', 'mo_tipo' => 'D', 'mo_documento' => '0007238153', 'mo_oficina' => 'CENTRO DE SERVIC. OPERAT. SS.', 'mo_monto' => 0.27, 'mo_saldo' => 165.56, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-14'), 'mo_concepto' => 'IVA COBRADO', 'mo_tipo' => 'D', 'mo_documento' => '0007238153', 'mo_oficina' => 'CENTRO DE SERVIC. OPERAT. SS.', 'mo_monto' => 0.03, 'mo_saldo' => 165.83, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-14'), 'mo_concepto' => '50-SPI-CCU - MIN. ECONOMIA CUENTA', 'mo_tipo' => 'C', 'mo_documento' => '0007238131', 'mo_oficina' => 'TENA', 'mo_monto' => 47.62, 'mo_saldo' => 165.86, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-13'), 'mo_concepto' => 'CONSUMO DATA AKI MOLINEROS 161', 'mo_tipo' => 'D', 'mo_documento' => '0013054261', 'mo_oficina' => 'INSTITUCIONAL SS.CC.', 'mo_monto' => 17.97, 'mo_saldo' => 118.24, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-13'), 'mo_concepto' => 'TRANSFERENCIA INTERNET', 'mo_tipo' => 'D', 'mo_documento' => '0010556737', 'mo_oficina' => 'AG. NORTE', 'mo_monto' => 1,482.78, 'mo_saldo' => 136.21, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-13'), 'mo_concepto' => 'RETIRO ATM BP N/GIRON 2', 'mo_tipo' => 'D', 'mo_documento' => '0010296228', 'mo_oficina' => 'EL GIRON', 'mo_monto' => 20.00, 'mo_saldo' => 1,618.99, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-13'), 'mo_concepto' => 'SPI COSTO OPER. CASH', 'mo_tipo' => 'D', 'mo_documento' => '0009710625', 'mo_oficina' => 'CENTRO DE SERVIC. OPERAT. SS.', 'mo_monto' => 0.27, 'mo_saldo' => 1,638.99, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-13'), 'mo_concepto' => 'IVA COBRADO', 'mo_tipo' => 'D', 'mo_documento' => '0009710625', 'mo_oficina' => 'CENTRO DE SERVIC. OPERAT. SS.', 'mo_monto' => 0.03, 'mo_saldo' => 1,639.26, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-13'), 'mo_concepto' => '50-SPI-CCU - MIN. ECONOMIA CUENTA', 'mo_tipo' => 'C', 'mo_documento' => '0009710600', 'mo_oficina' => 'TENA', 'mo_monto' => 1,483.08, 'mo_saldo' => 1,639.29, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-13'), 'mo_concepto' => 'TRANSFERENCIA INTERNET', 'mo_tipo' => 'D', 'mo_documento' => '0006486439', 'mo_oficina' => 'AG. NORTE', 'mo_monto' => 0.50, 'mo_saldo' => 156.21, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-10'), 'mo_concepto' => 'RENOVACION TARJETA DEBITO', 'mo_tipo' => 'D', 'mo_documento' => '0007529004', 'mo_oficina' => 'CENTRO DE SERVIC. OPERAT. SS.', 'mo_monto' => 1.65, 'mo_saldo' => 156.71, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-10'), 'mo_concepto' => 'IVA COBRADO', 'mo_tipo' => 'D', 'mo_documento' => '0007529004', 'mo_oficina' => 'CENTRO DE SERVIC. OPERAT. SS.', 'mo_monto' => 0.20, 'mo_saldo' => 158.36, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-10'), 'mo_concepto' => '12882154-COSTO IVA CASH-EQ-12430000', 'mo_tipo' => 'D', 'mo_documento' => '0006114437', 'mo_oficina' => 'SERVICIOS CENTRALES', 'mo_monto' => 0.04, 'mo_saldo' => 158.56, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-10'), 'mo_concepto' => '12882154-COSTO OPER CASH-EQ-12430000', 'mo_tipo' => 'D', 'mo_documento' => '0006114420', 'mo_oficina' => 'SERVICIOS CENTRALES', 'mo_monto' => 0.31, 'mo_saldo' => 158.60, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-10'), 'mo_concepto' => '12882154-E E Q-EQ-12430000', 'mo_tipo' => 'D', 'mo_documento' => '0006114380', 'mo_oficina' => 'SERVICIOS CENTRALES', 'mo_monto' => 41.09, 'mo_saldo' => 158.91, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-10'), 'mo_concepto' => 'TRANSFERENCIA INTERNET', 'mo_tipo' => 'C', 'mo_documento' => '0006100593', 'mo_oficina' => 'AG. NORTE', 'mo_monto' => 200.00, 'mo_saldo' => 200.00, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-09'), 'mo_concepto' => '12912261-MOVISTAR -CB-7872717', 'mo_tipo' => 'D', 'mo_documento' => '0006722146', 'mo_oficina' => 'CENTRO DE SERVIC. OPERAT. SS.', 'mo_monto' => 10.02, 'mo_saldo' => 0.00, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-09'), 'mo_concepto' => 'TRANSFERENCIA INTERNET', 'mo_tipo' => 'C', 'mo_documento' => '0004565335', 'mo_oficina' => 'AG. NORTE', 'mo_monto' => 10.00, 'mo_saldo' => 10.02, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                    );
                    foreach (array_reverse($movimientos) as $movimiento):
                        $mo = new Movimientos();
                        $mo->setMoFecha($movimiento['mo_fecha']);
                        $mo->setMoConcepto($movimiento['mo_concepto']);
                        $mo->setMoTipo($movimiento['mo_tipo']);
                        $mo->setMoDocumento($movimiento['mo_documento']);
                        $mo->setMoOficina($movimiento['mo_oficina']);
                        $mo->setMoMonto($movimiento['mo_monto']);
                        $mo->setMoSaldo($movimiento['mo_saldo']);
                        $mo->setMoFechaCrea($movimiento['mo_fecha_crea']);
                        $mo->setMoQuienCrea($movimiento['mo_quien_crea']);
                        $mo->setMoFechaModifica($movimiento['mo_fecha_modifica']);
                        $mo->setMoQuienModifica($movimiento['mo_quien_modifica']);
                        $mo->setAhorrosAh($ah);
                        $manager->persist($mo);
                    endforeach;
                break;
            endswitch;
        endforeach;
        $manager->flush();
    }
    
}