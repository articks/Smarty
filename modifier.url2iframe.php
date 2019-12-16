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
 * @param string $url       input text string
 * @return string |void
 */
function smarty_modifier_url2iframe($url)
{
    if(preg_match("/^[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)/isu",$url)) {
        return preg_replace(
            "/[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/isu",
            "<iframe src=\"//www.youtube.com/embed/$2?controls=0\" allowfullscreen=\"allowfullscreen\" allowtransparency=\"allowtransparency\" frameborder=\"0\" width=\"100%\" height=\"100%\" marginheight=\"0\" marginwidth=\"0\" scrolling=\"auto\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\"></iframe>",
            $url
        );
    }
    else {
        return "<iframe src=\"".$url."\" allowfullscreen=\"allowfullscreen\" allowtransparency=\"allowtransparency\" frameborder=\"0\" width=\"100%\" height=\"100%\" marginheight=\"0\" marginwidth=\"0\" scrolling=\"auto\"></iframe>";
    }
}

?>