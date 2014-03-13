<?php

namespace Dml\TodoBundle\Paginador;

/**
 * Description of Paginador
 *
 * @author Oswaldo
 */
class Paginador {
    
    private $count;
    private $currentPage;
    private $totalPages;
    
    public function paginate($query, $page = 1, $limit = 10) {
        
        // dando el valor actual a la página
        $this->currentPage = $page;
        
        // clonando el queryBuilder
        $clone = clone $query;
        
        // contando el numero de registros de la consulta
        $this->count = count($clone->getQuery()->getArrayResult());
        
        // dando el valor al limite que tendrá la consulta a la vez que hago un cast
        $limit = (int) $limit;
        
        // obteniendo el total de paginas
        $this->totalPages = ceil($this->count / $limit);
        
        // limitando
        $query = $query->setFirstResult(($this->currentPage - 1) * $limit)
                       ->setMaxResults($limit);
        
        return $query->getQuery()->getArrayResult();
    }

    public function getCount() {
        return $this->$count;
    }

    public function getCurrentPage() {
        return $this->currentPage;
    }

    public function getTotalPages() {
        return $this->$totalPages;
    }


    /**
     * <b>Por Oswaldo Rojas, realizado el Mié 05 Mar 2014 21:32:19</b>
     * 
     * Función que nos permite crear un paginador con opciones de navegacion
     * y que a la vez indica varias controles necesarios para mostrarlo en la
     * vista y ser reutilizado
     * 
     * @param type $value <p>
     * Valor necesario para la conversion
     * </p>
     * @return string formateado en modena
     */
    static public function pager($filas_x_pag, $pag_actual, $dql) {
//        $em->getRepository('TodoBundle:Movimientos')
//        $filas_por_pagina = 10;
//        $pagina_actual = (int) $request->get('pag');
//        switch ($pagina_actual):
//        case 0: 
//        case 1: $pagina_actual = 0; break;
//        default: $pagina_actual = ($pagina_actual - 1) * $filas_por_pagina;
//        endswitch;
//        $total_filas = $em->getRepository('TodoBundle:Movimientos')->moCount(1);
//        $total_paginas = ceil($total_filas/$filas_por_pagina);
//        $array = array();
//        for ( $i = 1 ; $i <= $total_paginas ; $i += 1 ) $array[$i] = $i;
//        $aux = (int) $request->get('pag');
//        $ref = 3;
//        if ($aux < $ref):
//        $ini = 1;
//        $fin = $ref;
//        elseif ($aux >= $ref && $aux <= ($total_paginas - $ref)):
//        $ini = $aux - 1;
//        $fin = $aux + 1;
//        elseif ($aux == ($total_paginas - $ref)):
//        $ini = $aux;
//        $fin = $total_paginas;
//        elseif ($aux > ($total_paginas - $ref) && $aux <= $total_paginas):
//        $ini = $total_paginas - ($ref - 1);
//        $fin = $total_paginas;
//        endif;
//        $myrange = range($ini, $fin);            
//        $output = array_intersect($array, $myrange);
    }

}