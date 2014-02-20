<?php

namespace Dml\TodoBundle\Entity;

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
     * @return int
     */
    public function moTable() {
        return $this->moAlias();
    }
    
    /**
     * <b>Por Oswaldo Rojas, realizado el Jue 20 Feb 2014 12:11:55</b>
     * 
     * Función que realiza el conteo de todas las filas de la tabla movimientos
     * 
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
    
}