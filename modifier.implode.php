<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */


/**
 * Smarty plugin
 *
 * Type:     modifier<br>
 * Name:     implode<br>
 * Date:     2014-07-18
 * Purpose:  Implode array with specific glue
 * Input:<br>
 *         - array = array to implode  
 *         - glue = glue witch implode - default: ', '
 * Example:  {$array|@implode:array}
 * @version  1.0.0
 * @author   Bc. Jan Cermak (http://jan-cermak.cz)
 * @param mixed
 * @param string
 * @return string
 */
 
function smarty_modifier_implode($array, $glue = ', ') {
	if(empty($array)) return '';
	
	if(!is_array($array)) return $array;
	
    return implode($glue, $array);
}
