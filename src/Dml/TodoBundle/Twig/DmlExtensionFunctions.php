<?php

namespace Dml\TodoBundle\Twig;

use Dml\TodoBundle\Util\Util;

/**
 * Class DmlExtension
 * Esta clase va a ser utilizada en la vista dentro del lenguaje Twig y para que
 * se pueda acceder es necesario agregarlo como servicio en el archvo services.yml
 * dentro de la ruta:
 * 
 * ejemplo: Dml\TodoBundle\Resources\config\services.yml
 *
 * El Objetivo será realizar funciones que retornen informacion y éstas deben recibir
 * varios parametros con las cuales trabajar.
 * 
 * @author Oswaldo
 * @fecha Dom 25 May 2014 - 000:24:04
 */
class DmlExtensionFunctions extends \Twig_Extension {
    
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
        return array('myNameLastnameOs' => new \Twig_Function_Method($this, 'myNameLastnameOsMethod'));
    }
    
    /**
     * <b>Por Oswaldo Rojas, realizado el Sáb 25 May 2014 00:39:11</b>
     * 
     * Función que recibe dos nombres y dos apellidos y devuelve
     * la combinacion del primer nombre y primer apellidos a ser vistos
     * en la vista para el usuario logueado
     * 
     * @param string $names <p>Los nombres del usuario</p>
     * @param string $lastnames <p>Los apellidos del usuario</p>
     * @return string Cadena con el primer nombre y primer apellido.
     */
    public function myNameLastnameOsMethod($names, $lastnames) {        
        list($name1, $name2) = explode(" ", $names);
        list($lname1, $lname2) = explode(" ", $lastnames);

        return trim($name1.' '.$lname1);
    }

    /**
     * <b>Por Oswaldo Rojas, realizado el Dom 25 May 2014 00:26:25</b>
     * 
     * Función que devuelve en nombre de la extensión para luego ser usada
     * en los templates o plantillas twig de la vista.
     * 
     * @return string Nombre de la extensión a ser usada en el twig
     */
    public function getName() { return 'dml_extension_functions'; }
    
}