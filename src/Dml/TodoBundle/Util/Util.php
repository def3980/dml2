<?php

namespace Dml\TodoBundle\Util;

/**
 * Description of Util
 *
 * @author Oswaldo
 */
class Util {
    
    static public function getUCWord($word) {
        return ucwords($word);
    }
    
    static public function getMyDump($array) {
        echo "<pre>";
        print_r($array);
        echo "</pre>";
        die();
    }
    
    static public function getMyDumpJSON($array) {
        echo "<pre>";
        echo json_encode($array);
        echo "</pre>";
        die();
    }
    
    static public function getJSON($array) {
        return json_encode($array);
    }
    
    static public function getMyDumpSQL($strSQL) {
        $html = '<textarea rows="5" cols="80">';
        $html .= $strSQL;
        $html .= '</textarea>';
        echo $html;
        die();
    }
    
    /**
     * <b>Por Oswaldo Rojas, realizado el Mié 05 Feb 2014 21:46:03</b>
     * 
     * Función que nos tranforma el valor decimal en el formato de modena
     * que necesitamos, es decir 2 decimales de exactitud y delimitando los
     * miles y cientos de miles
     * 
     * @param type $value <p>
     * Valor necesario para la conversion
     * </p>
     * @return string formateado en modena
     */
    static public function moneyFormat($value) {
        return number_format($value,'2',',','.');
    }

    /**
     * <b>Por Oswaldo Rojas, realizado el Mié 05 Feb 2014 21:37:12</b>
     * 
     * Funcion que construye la parte interna de una tabla y recupera los campos que contiene
     * el array asociativo para poder usuarlos e imprimir los datos que se devolverán como string
     * 
     * @param type $array <p>
     * Recibe un arreglo asociativo para construir la parte interna de la tabla
     * </p>
     * @return string Con los campos indicados en el arreglo
     */
    static public function buildTable($array) {
        $html = '';
        foreach ($array as $k => $v):
            $html .= '<tr>'."\n";        
            $html .= '  <td>'.$v['moFecha']->format('Y-m-d').'</td>'."\n";
            $html .= '  <td>'.$v['moConcepto'].'</td>'."\n";
            $html .= '  <td>'.$v['moTipo'].'</td>'."\n";
            $html .= '  <td>'.$v['moDocumento'].'</td>'."\n";
            $html .= '  <td>'.$v['moOficina'].'</td>'."\n";
            $html .= '  <td>'.self::moneyFormat($v['moMonto']).'</td>'."\n";
            $html .= '  <td>'.self::moneyFormat($v['moSaldo']).'</td>'."\n";
            $html .= '</tr>'."\n";
        endforeach;
        return $html;
    }
    
}