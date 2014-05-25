<?php

namespace Dml\TodoBundle\Entity\Repositories;

use Doctrine\ORM\Query\ResultSetMappingBuilder;
use Doctrine\ORM\EntityRepository;

/**
 * MovimientosRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class MovimientosRepository extends EntityRepository {
    
    /**
     * <b>Por Oswaldo Rojas, realizado el Jue 20 Feb 2014 13:19:01</b>
     * 
     * @return Object Objeto para realizar las consultas
     */
    private function moAlias() {
        return $this->createQueryBuilder('mo')
                    ->where('mo.moBorradoLogico = :bool')
                    ->setParameter('bool', false)
                    ->orderBy('mo.moId', 'desc');
    }

    /**
     * Retorna todos los datos de la tabla Movimientos
     * 
     * @return int
     */
    public function moTable() { return $this->moAlias(); }
    
    /**
     * <b>Por Oswaldo Rojas, realizado el Jue 20 Feb 2014 12:11:55</b>
     * 
     * Función que realiza el conteo de todas las filas de la tabla movimientos
     * 
     * @param type $id <p>
     * Identificador que diferencia las cuentas de ahorros que puede tener
     * el usuario
     * </p>
     * @return int Conteo total de registros
     */
    public function moCount($id) {
        return $this->moAlias()
                    ->select('count(mo)')
                    ->join('mo.ahorrosAh', 'ah')
                    ->andWhere('ah.ahId = :id')
                    ->setParameter('id', $id)
                    ->getQuery()
                    ->getSingleScalarResult();
    }
    
    /**
     * <b>Por Oswaldo Rojas, realizado el Jue 20 Feb 2014 12:11:55</b>
     * 
     * Función que inserta los datos en la tabla Movimientos tomando en cuenta
     * la relación y su clave foránea que para el caso hay que guardar el objeto.
     * 
     * @param array $fields <p>
     * Campos con información a ser guardada en la tabla de la BDD.
     * </p>
     * @return boolean Verdadero, confirmando la inserciónd e datos.
     */
    public function moInsert($fields) {
        $id = $fields;
        $em = $this->getEntityManager();
        $ah = $this->getEntityManager()->getRepository('TodoBundle:Ahorros')->find(end($id));
        array_pop($fields);
        foreach (array_reverse($fields) as $movimiento):
            $mo = new \Dml\TodoBundle\Entity\Movimientos(); // Llamo de esta manera a la clase por que se reubico los repositorios
            $mo->setMoFecha(new \DateTime($movimiento['mo_fecha'])); // 2014-04-09
            $mo->setMoConcepto($movimiento['mo_concepto']);
            $mo->setMoTipo($movimiento['mo_tipo']);
            $mo->setMoDocumento($movimiento['mo_documento']);
            $mo->setMoOficina($movimiento['mo_oficina']);
            $mo->setMoMonto($movimiento['mo_monto']);
            $mo->setMoSaldo($movimiento['mo_saldo']);
            $mo->setMoFechaCrea(new \DateTime('NOW'));
            $mo->setMoQuienCrea(1);
            $mo->setMoFechaModifica(null);
            $mo->setMoQuienModifica(null);
            $mo->setMoBorradoLogico(false);
            $mo->setAhorrosAh($ah);
            $em->persist($mo);
        endforeach;
        $em->flush();
        
        return array('msj' => true);
    }

}