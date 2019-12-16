<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */

/**
 * Smarty плагин для получения части строки utf8
 *
 * Type:     modifier<br>
 * Name:     utf8substr<br>
 * Purpose:  обрезаем utf8 строку
 * @author   Дмитрий Карасев <dima at karasev dot pro>
 * @param string
 * @param int
 * @param int
 * @return string
 */
function smarty_modifier_utf8substr($str="",$start=0,$length=0)
{
        if(!$length) {
            $length = $start;
            $start = 0;
        }
        return preg_replace('#^(?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,'.$start.'}'.
        '((?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,'.$length.'}).*#s',
        '$1',$str);
}
?>
