<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */

/**
 * Smarty плагин для реализации file_get_contents
 *
 * Type:     modifier<br>
 * Name:     contents<br>
 * Purpose:  реализация file_get_contents
 * @author   Дмитрий Карасев <dima at karasev dot pro>
 * @param string
 * @param string
 * @return string
 */
function smarty_modifier_urlcontents($src)
{
    $src = filter_var($src,FILTER_VALIDATE_URL);
    if($src!==false) {
        $src = @file_get_contents($src);
        return (($src!==false) ? $src : "");
    }
    else {
        return "";
    }
}
?>