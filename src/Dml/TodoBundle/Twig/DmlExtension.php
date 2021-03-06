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
 * @author Oswaldo
 * @fecha Vie 21 Mar 2014 - 11:42:44
 */
class DmlExtension extends \Twig_Extension {
    
    protected 
        $daysComplete   = array(
                                'domingo',
                                'lunes', 
                                'martes', 
                                'miercoles', 
                                'jueves', 
                                'viernes', 
                                'sabado'
                               ),
        $monthsComplete = array(
                                '', 
                                'enero', 
                                'febrero', 
                                'marzo', 
                                'abril', 
                                'mayo', 
                                'junio', 
                                'julio', 
                                'agosto', 
                                'septiembre', 
                                'octubre', 
                                'noviembre', 
                                'diciembre'
                               );


    /**
     * <b>Por Oswaldo Rojas, realizado el Vie 21 Mar 2014 11:56:43</b>
     * 
     * Función que devuelve un nombre simplificado de la función moneyFormatFilter()
     * con el objetivo que sea fácil de llamar en el template de la vista en twig.
     * 
     * @return instance Instacia con el nuevo nombre de la funcion ya referenciada.
     */
    public function getFilters() {
        $methods = array(
                        new \Twig_SimpleFilter('moneyFormatOs', array($this, 'moneyFormatOsFilter')),
                        new \Twig_SimpleFilter('dateSpanishOs', array($this, 'dateSpanishOsFilter')),
                        new \Twig_SimpleFilter('monthOs', array($this, 'monthOsFilter')),
                        );
        return $methods;
    }

    /**
     * <b>Por Oswaldo Rojas, realizado el Vie 21 Mar 2014 11:50:55</b>
     * 
     * Función que devuelve transformada un valor decimal cualquiera
     * en el formato deseado indicando que es un valor monetario
     * 
     * @param decimal $number <p>Número de decimales.</p>
     * @param integer $decimals <p>Indica cuantos decimales desea mostrar. Default: 2</p>
     * @param string $decPoint <p>Podemos indicar la división decimal. Default: ','</p>
     * @param string $thousandsSep <p>Podemos indicar la división de miles en una cantidad. Default: '.'</p>
     * @return string Valor transformado al formato decimal indicado.
     */
    public function moneyFormatOsFilter($number, $decimals = 2, $decPoint = ',', $thousandsSep = '.') {
        $price = number_format($number, $decimals, $decPoint, $thousandsSep);
        $price = '$ '.$price;

        return $price;
    }

    /**
     * <b>Por Oswaldo Rojas, realizado el Vie 21 Mar 2014 12:43:50</b>
     * 
     * Función que devuelve un formato de fecha personalizado en español de manera
     * entera y también de manera abreviada.
     * 
     * @param date $date <p>Fecha sin h:i:s.</p>
     * @param boolean $complete <p>Bandera para la validar el formato completo o abreviado de la fecha. Default: true</p>
     * @return string Fecha transformada de manera personalizada.
     */
    public function dateSpanishOsFilter($date, $complete = true) {
        /**
         * En el caso del parametro $date tenemos que es un object DateTime de Symfony2
         * y es necesario usar el método format para poderlo pasar a string y realizar la operación
         * deseada. También habrá ocaciones que tenemos una fecha en string y por tal razon será necesario
         * validar el parmetro.
         */
        $day   = is_object($date) ? explode('-', $date->format('Y-m-d H:i:s'), 3) : explode('-', $date, 3);
        $year  = $day[0];
        $month = (string)(int) $day[1];
        $day   = (string)(int) $day[2];
        $day   = $day < 10 ? "0{$day}" : $day;

        foreach ($this->daysComplete as $dc) $daysShort[] = ucfirst(substr($dc, 0, 3));
        foreach ($this->monthsComplete as $mc) $monthShort[] = ucfirst(substr($mc, 0, 3));

        $takeDay      = $this->daysComplete[intval((date('w', mktime(0, 0, 0, $month, $day, $year))))];
        $takeDayShort = $daysShort[intval((date('w', mktime(0, 0, 0, $month, $day, $year))))];

        return $complete ? ucfirst($takeDay).', '.$day.' '.ucfirst($this->monthsComplete[$month]).' '.$year
                         : $takeDayShort.', '.$day.' '.$monthShort[$month].' '.$year;
    }

    /**
     * <b>Por Oswaldo Rojas, realizado el Sáb 22 Mar 2014 15:51:05</b>
     * 
     * Función que devuelve el dia, mes de un objecto fecha en formatod e letras completas
     * o abreviadas
     * 
     * @param date $date <p>Fecha completa o sin h:i:s.</p>
     * @param string $opcion <p>Bandera para la validar indicar el mes o día.</p>
     * @param boolean $complete <p>Bandera para la validar el formato completo o abreviado de la fecha. Default: true</p>
     * @return string Fecha transformada de manera personalizada.
     */
    public function monthOsFilter($date, $opcion = 'mes', $complete = true) {
        /**
         * En el caso del parametro $date tenemos que es un object DateTime de Symfony2
         * y es necesario usar el método format para poderlo pasar a string y realizar la operación
         * deseada. También habrá ocaciones que tenemos una fecha en string y por tal razón será necesario
         * validar el parmetro.
         */
        $day   = is_object($date) ? explode('-', $date->format('Y-m-d H:i:s'), 3) : explode('-', $date, 3);
        $year  = $day[0];
        $month = (string)(int) $day[1];
        $day   = (string)(int) $day[2];

        switch ($opcion):
            case 'dia':
                foreach ($this->daysComplete as $dc) $daysShort[] = ucfirst(substr($dc, 0, 3));                
                $takeDay = $this->daysComplete[intval((date('w', mktime(0, 0, 0, $month, $day, $year))))];
                $takeDayShort = $daysShort[intval((date('w', mktime(0, 0, 0, $month, $day, $year))))];
                return $complete ? ucfirst($takeDay) : $takeDayShort;
            break;
            default:
                foreach ($this->monthsComplete as $mc) $monthShort[] = ucfirst(substr($mc, 0, 3));
                return $complete ? ucfirst($this->monthsComplete[$month]) : $monthShort[$month];
        endswitch;
    }

    /**
     * <b>Por Oswaldo Rojas, realizado el Vie 21 Mar 2014 11:48:20</b>
     * 
     * Función que devuelve en nombre de la extensión para luego ser usada
     * en los templates o plantillas twig de la vista
     * 
     * @return string Nombre de la extensión a ser usada en el twig
     */
    public function getName() { return 'dml_extension'; }
    
}