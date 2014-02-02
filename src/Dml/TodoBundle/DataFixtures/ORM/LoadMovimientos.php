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
                        array('mo_fecha' => new \DateTime('2014-01-13'), 'mo_concepto' => 'TRANSFERENCIA INTERNET', 'mo_tipo' => 'D', 'mo_documento' => '0010556737', 'mo_oficina' => 'AG. NORTE', 'mo_monto' => 1482.78, 'mo_saldo' => 136.21, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-13'), 'mo_concepto' => 'RETIRO ATM BP N/GIRON 2', 'mo_tipo' => 'D', 'mo_documento' => '0010296228', 'mo_oficina' => 'EL GIRON', 'mo_monto' => 20.00, 'mo_saldo' => 1618.99, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-13'), 'mo_concepto' => 'SPI COSTO OPER. CASH', 'mo_tipo' => 'D', 'mo_documento' => '0009710625', 'mo_oficina' => 'CENTRO DE SERVIC. OPERAT. SS.', 'mo_monto' => 0.27, 'mo_saldo' => 1638.99, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-13'), 'mo_concepto' => 'IVA COBRADO', 'mo_tipo' => 'D', 'mo_documento' => '0009710625', 'mo_oficina' => 'CENTRO DE SERVIC. OPERAT. SS.', 'mo_monto' => 0.03, 'mo_saldo' => 1639.26, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-13'), 'mo_concepto' => '50-SPI-CCU - MIN. ECONOMIA CUENTA', 'mo_tipo' => 'C', 'mo_documento' => '0009710600', 'mo_oficina' => 'TENA', 'mo_monto' => 1483.08, 'mo_saldo' => 1639.29, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
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
                case '2200555126':
                    $movimientos = array(
                        array('mo_fecha' => new \DateTime('2014-01-31'), 'mo_concepto' => 'INTERES A SU FAVOR', 'mo_tipo' => 'C', 'mo_documento' => '0000963683', 'mo_oficina' => 'AGENCIA PARA PROCESOS BATCH', 'mo_monto' => 4.63, 'mo_saldo' => 2513.07, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-27'), 'mo_concepto' => 'TRANSFERENCIA INTERNET', 'mo_tipo' => 'D', 'mo_documento' => '0006278330', 'mo_oficina' => 'AG. NORTE', 'mo_monto' => 2000.00, 'mo_saldo' => 2508.44, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-27'), 'mo_concepto' => 'CONSUMO DATA AKI MOLINEROS 161', 'mo_tipo' => 'D', 'mo_documento' => '0004281893', 'mo_oficina' => 'INSTITUCIONAL SS.CC.', 'mo_monto' => 27.47, 'mo_saldo' => 4508.44, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-27'), 'mo_concepto' => 'RETIRO ATM BP N/CCI 3', 'mo_tipo' => 'D', 'mo_documento' => '0002772763', 'mo_oficina' => 'C.C.I', 'mo_monto' => 40.00, 'mo_saldo' => 4535.91, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-27'), 'mo_concepto' => 'CONSUMO DATA MULTICINES', 'mo_tipo' => 'D', 'mo_documento' => '0002744935', 'mo_oficina' => 'INSTITUCIONAL SS.CC.', 'mo_monto' => 10.50, 'mo_saldo' => 4575.91, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-21'), 'mo_concepto' => 'RETIRO ATM BP N/GIRON 2', 'mo_tipo' => 'D', 'mo_documento' => '0005615423', 'mo_oficina' => 'EL GIRON', 'mo_monto' => 20.00, 'mo_saldo' => 4586.41, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-21'), 'mo_concepto' => 'DEPOSITO', 'mo_tipo' => 'C', 'mo_documento' => '0005369884', 'mo_oficina' => 'TENA', 'mo_monto' => 100.00, 'mo_saldo' => 4606.41, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-21'), 'mo_concepto' => '12980601-MASTERCARD-RA-518114000072', 'mo_tipo' => 'D', 'mo_documento' => '0000878222', 'mo_oficina' => 'SERVICIOS CENTRALES', 'mo_monto' => 397.97, 'mo_saldo' => 4506.41, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-20'), 'mo_concepto' => 'CONSUMO VISA NA CEBICHES DE LA RUMINAH', 'mo_tipo' => 'D', 'mo_documento' => '0002457005', 'mo_oficina' => 'INSTITUCIONAL SS.CC.', 'mo_monto' => 23.40, 'mo_saldo' => 4904.38, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-16'), 'mo_concepto' => 'CONSUMO DATA AKI MOLINEROS 161', 'mo_tipo' => 'D', 'mo_documento' => '0008690053', 'mo_oficina' => 'INSTITUCIONAL SS.CC.', 'mo_monto' => 98.92, 'mo_saldo' => 4927.78, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-16'), 'mo_concepto' => 'RETIRO ATM BP D/H. METROPOLITANO', 'mo_tipo' => 'D', 'mo_documento' => '0008185536', 'mo_oficina' => 'HOSPITAL METROPOLITANO', 'mo_monto' => 100.00, 'mo_saldo' => 5026.70, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-13'), 'mo_concepto' => 'TRANSFERENCIA INTERNET', 'mo_tipo' => 'D', 'mo_documento' => '0006288344', 'mo_oficina' => 'AG. NORTE', 'mo_monto' => 150.00, 'mo_saldo' => 5126.70, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-10'), 'mo_concepto' => 'TRANSFERENCIA INTERNET', 'mo_tipo' => 'D', 'mo_documento' => '0006100593', 'mo_oficina' => 'AG. NORTE', 'mo_monto' => 200.00, 'mo_saldo' => 5276.70, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-09'), 'mo_concepto' => 'CONSUMO DATA AKI MOLINEROS 161', 'mo_tipo' => 'D', 'mo_documento' => '0007422338', 'mo_oficina' => 'INSTITUCIONAL SS.CC.', 'mo_monto' => 8.10, 'mo_saldo' => 5476.70, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-09'), 'mo_concepto' => 'RETIRO ATM BP N/EL GIRON-3', 'mo_tipo' => 'D', 'mo_documento' => '0004307541', 'mo_oficina' => 'EL GIRON', 'mo_monto' => 20.00, 'mo_saldo' => 5484.80, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-08'), 'mo_concepto' => 'CONSUMO DATA AKI MOLINEROS 161', 'mo_tipo' => 'D', 'mo_documento' => '0007558526', 'mo_oficina' => 'INSTITUCIONAL SS.CC.', 'mo_monto' => 48.02, 'mo_saldo' => 5504.80, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-07'), 'mo_concepto' => '12899201-COSTO IVA CASH-AP-00046554192', 'mo_tipo' => 'D', 'mo_documento' => '0009174228', 'mo_oficina' => 'SERVICIOS CENTRALES', 'mo_monto' => 0.04, 'mo_saldo' => 5552.82, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-07'), 'mo_concepto' => '12899201-COSTO OPER CASH-AP-00046554192', 'mo_tipo' => 'D', 'mo_documento' => '0009174225', 'mo_oficina' => 'SERVICIOS CENTRALES', 'mo_monto' => 0.31, 'mo_saldo' => 5552.86, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-07'), 'mo_concepto' => '12899201-EMAP Q-AP-00046554192', 'mo_tipo' => 'D', 'mo_documento' => '0009174186', 'mo_oficina' => 'SERVICIOS CENTRALES', 'mo_monto' => 8.12, 'mo_saldo' => 5553.17, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-07'), 'mo_concepto' => 'PAGO PRESTAMO', 'mo_tipo' => 'D', 'mo_documento' => '0000811378', 'mo_oficina' => 'AG. NORTE', 'mo_monto' => 281.13, 'mo_saldo' => 5561.29, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-06'), 'mo_concepto' => 'RETIRO ATM BP D/ALAMEDA 2', 'mo_tipo' => 'D', 'mo_documento' => '0008266162', 'mo_oficina' => 'ALAMEDA', 'mo_monto' => 20.00, 'mo_saldo' => 5842.42, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-03'), 'mo_concepto' => 'RETIRO ATM BP N/EL TENA 2', 'mo_tipo' => 'D', 'mo_documento' => '0009304727', 'mo_oficina' => 'TENA', 'mo_monto' => 50.00, 'mo_saldo' => 5862.42, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-02'), 'mo_concepto' => 'CONSUMO DATA SANASANA TENA', 'mo_tipo' => 'D', 'mo_documento' => '0003431397', 'mo_oficina' => 'INSTITUCIONAL SS.CC.', 'mo_monto' => 34.43, 'mo_saldo' => 5912.42, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
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
                case '2200555154':
                    $movimientos = array(
                        array('mo_fecha' => new \DateTime('2014-01-31'), 'mo_concepto' => 'INTERES A SU FAVOR', 'mo_tipo' => 'C', 'mo_documento' => '0000963711', 'mo_oficina' => 'AGENCIA PARA PROCESOS BATCH', 'mo_monto' => 0.75, 'mo_saldo' => 3992.05, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-30'), 'mo_concepto' => 'INTERES A SU FAVOR', 'mo_tipo' => 'C', 'mo_documento' => '0000962977', 'mo_oficina' => 'AGENCIA PARA PROCESOS BATCH', 'mo_monto' => 0.25, 'mo_saldo' => 3991.30, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-29'), 'mo_concepto' => 'INTERES A SU FAVOR', 'mo_tipo' => 'C', 'mo_documento' => '0000962978', 'mo_oficina' => 'AGENCIA PARA PROCESOS BATCH', 'mo_monto' => 0.25, 'mo_saldo' => 3991.05, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-28'), 'mo_concepto' => 'INTERES A SU FAVOR', 'mo_tipo' => 'C', 'mo_documento' => '0000962979', 'mo_oficina' => 'AGENCIA PARA PROCESOS BATCH', 'mo_monto' => 0.25, 'mo_saldo' => 3990.80, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-27'), 'mo_concepto' => 'INTERES A SU FAVOR', 'mo_tipo' => 'C', 'mo_documento' => '0000962981', 'mo_oficina' => 'AGENCIA PARA PROCESOS BATCH', 'mo_monto' => 0.25, 'mo_saldo' => 3990.55, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-27'), 'mo_concepto' => 'TRANSFERENCIA INTERNET', 'mo_tipo' => 'C', 'mo_documento' => '0006278330', 'mo_oficina' => 'AG. NORTE', 'mo_monto' => 2000.00, 'mo_saldo' => 3990.30, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-24'), 'mo_concepto' => 'INTERES A SU FAVOR', 'mo_tipo' => 'C', 'mo_documento' => '0000962981', 'mo_oficina' => 'AGENCIA PARA PROCESOS BATCH', 'mo_monto' => 0.37, 'mo_saldo' => 1990.30, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-23'), 'mo_concepto' => 'INTERES A SU FAVOR', 'mo_tipo' => 'C', 'mo_documento' => '0000962986', 'mo_oficina' => 'AGENCIA PARA PROCESOS BATCH', 'mo_monto' => 0.12, 'mo_saldo' => 1989.93, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-22'), 'mo_concepto' => 'INTERES A SU FAVOR', 'mo_tipo' => 'C', 'mo_documento' => '0000962986', 'mo_oficina' => 'AGENCIA PARA PROCESOS BATCH', 'mo_monto' => 0.12, 'mo_saldo' => 1989.81, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-21'), 'mo_concepto' => 'INTERES A SU FAVOR', 'mo_tipo' => 'C', 'mo_documento' => '0000962986', 'mo_oficina' => 'AGENCIA PARA PROCESOS BATCH', 'mo_monto' => 0.12, 'mo_saldo' => 1989.69, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-20'), 'mo_concepto' => 'INTERES A SU FAVOR', 'mo_tipo' => 'C', 'mo_documento' => '0000962986', 'mo_oficina' => 'AGENCIA PARA PROCESOS BATCH', 'mo_monto' => 0.12, 'mo_saldo' => 1989.57, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-17'), 'mo_concepto' => 'INTERES A SU FAVOR', 'mo_tipo' => 'C', 'mo_documento' => '0000962986', 'mo_oficina' => 'AGENCIA PARA PROCESOS BATCH', 'mo_monto' => 0.37, 'mo_saldo' => 1989.45, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-16'), 'mo_concepto' => 'INTERES A SU FAVOR', 'mo_tipo' => 'C', 'mo_documento' => '0000962986', 'mo_oficina' => 'AGENCIA PARA PROCESOS BATCH', 'mo_monto' => 0.12, 'mo_saldo' => 1989.08, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-15'), 'mo_concepto' => 'INTERES A SU FAVOR', 'mo_tipo' => 'C', 'mo_documento' => '0000962989', 'mo_oficina' => 'AGENCIA PARA PROCESOS BATCH', 'mo_monto' => 0.12, 'mo_saldo' => 1988.96, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-14'), 'mo_concepto' => 'INTERES A SU FAVOR', 'mo_tipo' => 'C', 'mo_documento' => '0000962990', 'mo_oficina' => 'AGENCIA PARA PROCESOS BATCH', 'mo_monto' => 0.12, 'mo_saldo' => 1988.84, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-13'), 'mo_concepto' => 'INTERES A SU FAVOR', 'mo_tipo' => 'C', 'mo_documento' => '0000962995', 'mo_oficina' => 'AGENCIA PARA PROCESOS BATCH', 'mo_monto' => 0.12, 'mo_saldo' => 1988.72, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-13'), 'mo_concepto' => 'TRANSFERENCIA INTERNET', 'mo_tipo' => 'C', 'mo_documento' => '0010556737', 'mo_oficina' => 'AG. NORTE', 'mo_monto' => 1482.78, 'mo_saldo' => 1988.60, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-10'), 'mo_concepto' => 'INTERES A SU FAVOR', 'mo_tipo' => 'C', 'mo_documento' => '0001056758', 'mo_oficina' => 'AGENCIA PARA PROCESOS BATCH', 'mo_monto' => 0.09, 'mo_saldo' => 505.82, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-09'), 'mo_concepto' => 'INTERES A SU FAVOR', 'mo_tipo' => 'C', 'mo_documento' => '0001056758', 'mo_oficina' => 'AGENCIA PARA PROCESOS BATCH', 'mo_monto' => 0.03, 'mo_saldo' => 505.73, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-08'), 'mo_concepto' => 'INTERES A SU FAVOR', 'mo_tipo' => 'C', 'mo_documento' => '0001056759', 'mo_oficina' => 'AGENCIA PARA PROCESOS BATCH', 'mo_monto' => 0.03, 'mo_saldo' => 505.70, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-07'), 'mo_concepto' => 'INTERES A SU FAVOR', 'mo_tipo' => 'C', 'mo_documento' => '0001056762', 'mo_oficina' => 'AGENCIA PARA PROCESOS BATCH', 'mo_monto' => 0.03, 'mo_saldo' => 505.67, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-06'), 'mo_concepto' => 'INTERES A SU FAVOR', 'mo_tipo' => 'C', 'mo_documento' => '0001056762', 'mo_oficina' => 'AGENCIA PARA PROCESOS BATCH', 'mo_monto' => 0.03, 'mo_saldo' => 505.64, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-03'), 'mo_concepto' => 'INTERES A SU FAVOR', 'mo_tipo' => 'C', 'mo_documento' => '0001056762', 'mo_oficina' => 'AGENCIA PARA PROCESOS BATCH', 'mo_monto' => 0.09, 'mo_saldo' => 505.61, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
                        array('mo_fecha' => new \DateTime('2014-01-02'), 'mo_concepto' => 'INTERES A SU FAVOR', 'mo_tipo' => 'C', 'mo_documento' => '0001056764', 'mo_oficina' => 'AGENCIA PARA PROCESOS BATCH', 'mo_monto' => 0.03, 'mo_saldo' => 505.52, 'mo_fecha_crea' => new \DateTime('2014-02-01 00:00:01'), 'mo_quien_crea' => 1, 'mo_fecha_modifica' => NULL, 'mo_quien_modifica' => NULL),
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