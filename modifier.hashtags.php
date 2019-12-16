<?php
/**
 * Smarty plugin
 *
 * @package Smarty
 * @subpackage PluginsModifier
 */

/**
 * Smarty hashtags modifier plugin
 *
 * Type:     modifier<br>
 * Name:     hashtags<br>
 *
 * @param string $string       input text string
 * @param boolean $strip flag if strip_tags is needed
 * @return string |void
 */
function smarty_modifier_hashtags($string,$searchurl="%HASH%%TAG%",$template="<a href=\"%URL%\">%HASH%%TAG%</a>")
{
    $fchars = "#%,:;?!()[]{}\"";
    $template = str_replace("%URL%",$searchurl,$template);
    $template = str_replace("%HASH%","$2",$template);
    $template = str_replace("%TAG%","$3",$template);
    $template = "$1".$template;
    $string = " ".$string;
    $string = preg_replace("/(\s)(\#)([^\s".preg_quote($fchars)."]+[^\s".preg_quote($fchars.".")."]{1})/isu",$template,$string);
    $string = mb_substr($string,1);
    return $string;
}

?>