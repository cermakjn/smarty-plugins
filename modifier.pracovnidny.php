<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */


/**
 * Smarty pracovnidny modifier plugin
 *
 * Type:     modifier<br>
 * Name:     pracovnidny<br>
 * Purpose:  Vysklonuje "pracovní dny" podle číslice
 * Example:  {$var|pracovnidny}
 * @author   Bc. Jan Cermak (http://jan-cermak.cz)
 * @version  1.0
 * @param int
 * @return string
 */
function smarty_modifier_pracovnidny($text) {
    if(intval($text) == 1) return $text .' pracovní den';
	if(intval($text) >=2 && intval($text) <= 4) return $text . ' pracovní dny';
	return $text . ' pracovních dnů';
}
