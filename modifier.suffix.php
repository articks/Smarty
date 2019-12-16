<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */

/**
 * Smarty плагин для вывода правильного склонения слова рядом с числом
 *
 * Type:     modifier<br>
 * Name:     suffix<br>
 * Purpose:  вывод склонений
 * @author   Дмитрий Карасев <dima at karasev dot pro>
 * @param integer
 * @param string
 * @param string
 * @param string
 * @return string
 */
function smarty_modifier_suffix($number,$s1="",$s2="",$s3="")
{
    $number = abs((int)$number);
    $div = $number % 10;
    $div2 = $number % 100;
    if($div===1 && $div2!==11) {
        return $s1;
    }
    elseif(($div===2 || $div===3 || $div===4) && ($div2!==12 && $div2!==13 && $div2!==14)) {
        return $s2;
    }
    else {
        return $s3;
    }
}
?>