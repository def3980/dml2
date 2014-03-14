<?php

namespace Dml\TodoBundle\Paginador;

use Dml\TodoBundle\Pager\Pager;

/**
 * Description of Paginador
 *
 * @author Oswaldo
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
        $query->setFirstResult(0)
              ->setMaxResults(0);

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
     * @return type QueryBuilder
     */
    public function getSelect() { return $this->select; }

    /**
     * Guarda el objeto de la consulta o query para el paginador
     * 
     * @param type QueryBuilder $select
     */
    public function setSelect($select) { $this->select = $select; }
    
    /**
     * Returns a query for counting the total results.
     * Retorna una consulta o query builder del total de resultados
     *
     * @return type QueryBuilder
     */
    public function getCountQuery() {
        $query = clone $this->getSelect();
        $query->setFirstResult(0)
              ->setMaxResults(0);

        return $query;
    }
    
    /**
     * Obtiene todos los resultados para la instancia de la página
     *
     * @param mixed $hydrationMode Un modo de indetificador de hidratación
     * @return Doctrine_Collection|array
     */
    public function getResults($hydrationMode = null) {
//        return $this->getQuery()->execute(array(), $hydrationMode);
//        return $this->getSelect()->getQuery()->getResult(Query::HYDRATE_ARRAY);
        return $this->getSelect()->getQuery()->getSQL();//->getResult($hydrationMode);
    }
}