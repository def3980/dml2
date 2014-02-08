/** 
 * Funciones que se van a aplicar en todos los módulos en los cuales
 * se requiera de ayuda con javascript y jquery
 * para procesar las peticiones del usuario
 */

/**
 * <strong>Por <u>Oswaldo Rojas</u>, realizado el Mié 05 Feb 2014 20:46:23</strong>
 * <br /><br />
 * Funcion que devuelve la longitud de un Objeto JSON
 * ya que javascript no tiene la propiedad length para
 * objetos y toca hacerlo manualmente
 * 
 * @param {type} obj
 * @returns {Number}
 */
function objLen(obj) {
    var len = 0;
    for (var x in obj) if(obj.hasOwnProperty(x)) len++;
    
    return len;
}

/**
 * <strong>Por <u>Oswaldo Rojas</u>, realizado el Sáb 08 Feb 2014 12:03:12</strong>
 * <br /><br />
 * Funcion que devuelve datos en formato visible para poder
 * ser investigado la forma que están distribuidos los datos
 * de un arreglo simple, complejo y de onjetos
 * 
 * @param {type} obj
 * @returns {Number}
 */
function var_dump(variable) {
    switch (typeof variable) {
        case "object":
            for (var i in variable) console.log(i + ":" + variable[i]);
        break;
        default: //number, string, boolean, null, undefined 
            console.log(typeof variable + ":" + variable);
        break;
    }
}