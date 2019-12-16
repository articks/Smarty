<?php
/**
 * Smarty plugin
 * 
 * @package Smarty
 * @subpackage PluginsModifier
 */

/**
 * Smarty wraplinks modifier plugin
 * 
 * Type:     modifier<br>
 * Name:     wraplinks<br>
 * 
 * @param string $string       input text string
 * @param boolean $strip flag if strip_tags is needed
 * @return string |void
 */
function smarty_modifier_wraplinks($string,$strip=true)
{
    if($strip) {
        $string = strip_tags($string);
    }
    $string = " ".trim($string);
    $search = array(
        "'[\w\+]+://[A-z0-9а-яА-Я\.\?\+\-/_=&%#:;@]+[\w/=]+'isu",
        "'([^/])(www\.[A-z0-9а-яА-Я\.\?\+\-/_=&%#:;@]+[\w/=]+)'isu",
        "'[\w]+[\w\-\.]+@[\w\-\.]+\.[\w]+'isu"
    );
    $replace = array(
        '<a href="$0" target="_blank" rel="nofollow">$0</a>',
        '$1<a href="http://$2" target="_blank" rel="nofollow">$2</a>',
        '<a href="mailto:$0" rel="nofollow">$0</a>'
    );
    $string = preg_replace($search,$replace,$string);
    $string = trim($string);
    return $string;
}

?>