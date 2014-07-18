<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */


/**
 * Smarty rawurlencode modifier plugin
 *
 * Type:     modifier<br>
 * Name:     rawurlencode<br>
 * Purpose:  Provide rawurlencode function
 * Example:  {$var|rawurlencode}
 * @author   Bc. Jan Cermak (http://jan-cermak.cz)
 * @version  1.0.0
 * @param string
 * @return string
 */
function smarty_modifier_rawurlencode($text) {
	return rawurlencode($text);
}
