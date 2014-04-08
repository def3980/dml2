<?php

namespace Dml\TodoBundle\Twig;

use Doctrine\ORM\EntityManager;
use Dml\TodoBundle\Util\Util;

/**
 * Class DmlExtension
 * Esta clase va a ser utilizada en la vista dentro del lenguaje Twig y para que
 * se pueda acceder es necesario agregarlo como servicio en el archvo services.yml
 * dentro de la ruta:
 * 
 * ejemplo: Dml\TodoBundle\Resources\config\services.yml
 *
 * El Objetivo será realizar consultas desde la vista ya que inicialmente no se las 
 * puede realizar.
 * 
 * @author Oswaldo
 * @fecha Dom 30 Mar 2014 - 11:29:53
 */
class DmlExtensionQueries extends \Twig_Extension {
    
    private $em;
    
    /**
     * <b>Por Oswaldo Rojas, realizado el Dom 30 Mar 2014 10:32:12</b>
     * 
     * Función constructor que inicializa la clase en arranque instanciando la conexión
     * con el entity manager de symfony para poder realziar las consultas necesarias.
     * 
     * @return instance Instacia con la conexión al entity manager.
     */
    public function __construct(EntityManager $em) { $this->em = $em; }
    
    /**
     * <b>Por Oswaldo Rojas, realizado el Dom 30 Mar 2014 14:28:12</b>
     * 
     * Función que devuelve un nombre simplificado sobre cada uno de los método de
     * esta clase con el objetivo que sea fácil de llamar en el template de la vista
     * en el twig.
     * 
     * @return instance Instacia con el nuevo nombre de la funcion ya referenciada.
     */
    public function getFunctions() {
        return array('dqlSingleOs' => new \Twig_Function_Method($this, 'dqlSingleOsMethod'));
    }
    
    /**
     * <b>Por Oswaldo Rojas, realizado el Dom 30 Mar 2014 14:33:29</b>
     * 
     * Función que devuelve la consulta DQL ejecutada para porder ser usada en la
     * vista del twig
     * 
     * @param string $dql <p>String que contiene la consulta en formato DQL.</p>
     * @param array $param <p>Parametros que pueden estar asociados al dql. Default: null.</p>
     * @return array Un solo dato resultante.
     */
    public function dqlSingleOsMethod($dql, $param = null) {
        $q = $this->em->createQuery($dql);
        if (is_array($param)) 
            foreach ($param as $k => $v)
                $q = $q->setParameter($k, $v);
        return $q->getSingleScalarResult();
    }

    /**
     * <b>Por Oswaldo Rojas, realizado el Vie 21 Mar 2014 11:48:20</b>
     * 
     * Función que devuelve en nombre de la extensión para luego ser usada
     * en los templates o plantillas twig de la vista.
     * 
     * @return string Nombre de la extensión a ser usada en el twig
     */
    public function getName() { return 'dml_extension_queries'; }
    
}