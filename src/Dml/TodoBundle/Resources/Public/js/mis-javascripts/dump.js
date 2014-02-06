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
