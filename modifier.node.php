<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */

/**
 * Smarty плагин для группировки элементов массива
 *
 * Type:     modifier<br>
 * Name:     node<br>
 * Purpose:  Получение элемента массива
 * @author   Дмитрий Карасев <dima at karasev dot pro>
 * @param array
 * @return array
 */
function smarty_modifier_node($array,$path)
{
    $r = $array;
    $path = explode("/",trim(trim($path),"/"));
    foreach($path as $v) {
        $r = $r[$v];
    }
    return $r;
}
?>