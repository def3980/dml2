<?php

namespace Dml\TodoBundle\Pager;

/**
 * Clase Pager
 *
 * @author Oswaldo Rojas
 * @fecha Jue 13 Mar 2014 - 09:22:48
 */
abstract class Pager {
    
    /** 
     * Declaracion de variables protegidas para la utilizacion del paginador
     * y de las clases que se extienden de la misma
     */
    protected 
        $page            = 1,
        $maxPerPage      = 0,
        $lastPage        = 1,
        $nbResults       = 0,
        $class           = '',
        $tableName       = '',
        $objects         = null,
        $cursor          = 1,
        $parameters      = array(),
        $currentMaxLink  = 1,
        $parameterHolder = null,
        $maxRecordLimit  = false,

        // used by iterator interface
        $results         = null,
        $resultsCounter  = 0;
    
    /**
     * Constructor.
     * Nos va a permitir indicar por parte del usuario las configuraciones por
     * defecto que necesita en el paginador para empezar a realizar la consulta
     * que nos devuelve los datos necesarios para paginar
     * 
     * @param $class El nombre del modelo de la clase para Symfony2
     * @param $maxPerPage Numero de registros que se muestran por página
     */
    public function __construct($class, $maxPerPage = 10) {
        $this->setClass($class);
        $this->setMaxPerPage($maxPerPage);
    }
    
    /**
     * Inicializa el paginador.
     * 
     * Función que se ejecuta después de ingresar los valores por defector en el
     * constructor.
     */
    abstract public function init();
    
    /**
     * Retorna un arreglo de resultados de la páginad dada.
     *
     * @return array
     */
    abstract public function getResults();

    /**
     * Retorna el nombre del modelo guardado en el constructor y nos servirá para
     * realizar la consulta correspondiente.
     * 
     * @return string
     */
    public function getClass() { return $this->class; }

    /**
     * Guarda el nombre de la clase indicada previamente en el constructor
     * 
     * @param string $class
     */
    public function setClass($class) { $this->class = $class; }

    /**
     * Retorna la página actual
     * 
     * @return integer
     */
    public function getPage() { return $this->page; }

    /**
     * Guarda la página actual
     * 
     * @param $page
     */
    public function setPage($page) {
        $this->page = intval($page);
        if ($this->page <= 0) 
            // guardo la primera página, la cual depende de un máximo guardado
            // en la instancia del paginador por el usuario que lo necesite
            $this->page = $this->getMaxPerPage() ? 1 : 0;
    }
    
    /**
     * Retorna el último número de página
     * 
     * @return integer
     */
    public function getLastPage() { return $this->lastPage; }

    /**
     * Guarda el último número de página
     * 
     * @param $page
     */
    public function setLastPage($page) {
        $this->lastPage = $page;
        if ($this->getPage() > $page) 
            $this->setPage($page);
    }
    
    /**
     * Retorna el número máximo de resultados por página
     * 
     * @return integer
     */
    public function getMaxPerPage() { return $this->maxPerPage; }

    /**
     * Guarda el número máximo de resultados por página
     * 
     * @param $max
     */
    public function setMaxPerPage($max) {
        switch ($max):
            case 0:
                $this->maxPerPage = 0;
                $this->page = 0;
            break;
            case ($max > 0):
                $this->maxPerPage = $max;
                if ($this->page == 0)
                    $this->page = 1;
            break;
            default:
                $this->maxPerPage = 1;
                if ($this->page == 0)
                    $this->page = 1;
        endswitch;
    }

    /**
     * Retorna el número de resultados
     * 
     * @return integer
     */
    public function getNbResults() { return $this->nbResults; }

    /**
     * Guarda el número de resultados
     * 
     * @param $nb
     */
    public function setNbResults($nb) { $this->nbResults = $nb; }
    
    /**
     * Retorna true si el query actual requiere paginación.
     *
     * @return boolean
     */
    public function haveToPaginate() {
        return $this->getMaxPerPage() && $this->getNbResults() > $this->getMaxPerPage();
    }

    /**
     * Retorna el primer número de página
     *
     * @return integer
     */
    public function getFirstPage() { return 1; }
    
    /**
     * Retorna el número de la siguiente página.
     *
     * @return integer
     */
    public function getNextPage() { return min($this->getPage() + 1, $this->getLastPage()); }

    /**
     * Retorna el número de la página anterior
     *
     * @return integer
     */
    public function getPreviousPage() { return max($this->getPage() - 1, $this->getFirstPage()); }
    
    /**
     * Retorna una arreglo de los números de páginas a usar los enlaces del
     * paginador.
     *
     * @param  integer $nb_links El número máximo de páginas a retornar
     * @return array
     */
    public function getLinks($nb_links = 5) {
        $links = array();
        $tmp   = $this->page - floor($nb_links / 2);
        $check = $this->lastPage - $nb_links + 1;
        $limit = $check > 0 ? $check : 1;
        $begin = $tmp > 0 ? ($tmp > $limit ? $limit : $tmp) : 1;

        $i = (int) $begin;
        while ($i < $begin + $nb_links && $i <= $this->lastPage) $links[] = $i++;

        $this->currentMaxLink = count($links) ? $links[count($links) - 1] : 1;

        return $links;
    }
    
    /**
     * Retorna el enlace máximo de la página.
     *
     * @return integer
     */
    public function getCurrentMaxLink() { return $this->currentMaxLink; }

}