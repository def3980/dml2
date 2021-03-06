<?php

namespace Dml\TodoBundle\Paginador;

use Dml\TodoBundle\Pager\Pager;

/**
 * Detalle de la clase Paginador
 * La presente nos ayuda a iniciar el paginador ya que usa métodos definidos
 * de una clase padre llamada Pager.php
 *
 * @author Oswaldo Rojas, Sáb 15 Mar 2014 10:17:11
 */
class Paginador extends Pager {

    /** 
     * Declaracion de variables protegidas para la utilizacion del paginador
     * y de las clases que se extienden de la misma
     */
    protected
        $select            = null,
        $tableMethodName   = null,
        $tableMethodCalled = false;

    /**
     * Iniciando el paginador con las opciones indicadas por el usuario
     */
    public function init() {
        $countQuery = $this->getCountQuery(); // clono la consulta previamente
        $count      = count($countQuery->getQuery()->getArrayResult());
                
        $this->setNbResults($count);
        
        $query = $this->getSelect();
        
        if (0 == $this->getPage() ||
            0 == $this->getMaxPerPage() ||
            0 == $this->getNbResults()):
            $this->setLastPage(0);
        else:
            $offset = ($this->getPage() - 1) * $this->getMaxPerPage();
            $this->setLastPage(ceil($this->getNbResults() / $this->getMaxPerPage()));
            $query->setFirstResult($offset)
                  ->setMaxResults($this->getMaxPerPage());
        endif;
    }
    
    /**
     * Retorna la consulta o query para el paginador
     * 
     * @return QueryBuilder
     */
    public function getSelect() { return $this->select; }

    /**
     * Guarda el objeto de la consulta o query para el paginador
     * 
     * @param QueryBuilder $select
     */
    public function setSelect($select) { $this->select = $select; }
    
    /**
     * Retorna una consulta o query builder clonada para despues ser ejecutada
     * y devolver el total de resultados
     *
     * @return QueryBuilder
     */
    public function getCountQuery() { return clone $this->getSelect(); }
    
    /**
     * Obtiene todos los resultados para la instancia de la página
     *
     * @param mixed $hydrationMode Un modo de identificador de hidratación
     * @return Doctrine_Collection|array
     */
    public function getResults($hydrationMode = \Doctrine\ORM\Query::HYDRATE_ARRAY) {
        return $this->getSelect()->getQuery()->getResult($hydrationMode);
    }
    
    /**
     * Obtiene el query nativo usado para obtener los datos consultado en el motor
     * de basede datos.
     *
     * @return string
     */
    public function getSqlQuery() {
        return $this->getCountQuery()->getQuery()->getSQL();
    }
    
    /**
     * Obtiene la suma de un campo ecibido como parametro para esta consulta personalizada
     * y es un adicional que se puede trabajar desde este paginador.
     *
     * @param string $field Campo que hace referencia a la BDD.
     * @return Doctrine_Collection|array
     */
    public function getSumQuery($field) {
        $qb = $this->getCountQuery();
        $alias = current($qb->getDQLPart('from'))->getAlias();
        $qb = $qb->addSelect("SUM({$alias}.{$field}) as total".ucfirst($field)."")
                 ->groupBy("{$alias}.moTipo")
                 ->setFirstResult(0); // seteo el valor del offset ya que la suma no aplica con el valor > 0
//        return $qb->getQuery()->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY); // Debido a que la consulta devuelve un fila y varios campos.
        return $qb->getQuery()->getSQL(); // Debido a que la consulta devuelve un fila y varios campos.

//        $qb = $this->getCountQuery();
//        $alias = current($qb->getDQLPart('from'))->getAlias();
//        $qb = $qb->addSelect("SUM({$alias}.{$field}) as total".ucfirst($field)."")
////                 ->andWhere($alias.'.'.$where)
////                 ->setParameter($paramTxt, $paramVal)
//                 ->setFirstResult(0); // seteo el valor del offset ya que la suma no aplica con el valor > 0
//        return $qb->getQuery()->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY); // Debido a que la consulta devuelve un fila y varios campos.
////        return $qb->getQuery()->getSQL(); // Debido a que la consulta devuelve un fila y varios campos.
//        SELECT 
//	SUM(
//        (
//            SELECT SUM(mo.mo_monto)
//            FROM MOVIMIENTOS mo
//            INNER JOIN AHORROS ah ON mo.ahorros_ah_id = ah.ah_id 
//            WHERE mo.mo_borrado_logico = 0 AND 
//                  ah.ah_id = 1 AND 
//                  mo.mo_concepto LIKE '%internet%' AND
//                  mo.mo_tipo = 'C'
//        ) - (
//            SELECT SUM(mo.mo_monto)
//            FROM MOVIMIENTOS mo
//            INNER JOIN AHORROS ah ON mo.ahorros_ah_id = ah.ah_id 
//            WHERE mo.mo_borrado_logico = 0 AND 
//                  ah.ah_id = 1 AND 
//                  mo.mo_concepto LIKE '%internet%' AND
//                  mo.mo_tipo = 'D'
//    	)
//    )AS suma2 
//FROM MOVIMIENTOS
    }
}