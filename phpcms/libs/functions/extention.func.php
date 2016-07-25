<?php
/**
 *  extention.func.php 用户自定义函数库
 *
 * @copyright			(C) 2005-2010 PHPCMS
 * @license				http://www.phpcms.cn/license/
 * @lastmodify			2010-10-27
 */
 /**
 * 调试输出函数
 * @param mix $val
 * @param string $dump
 * @param string $exit
 */
function debug($val,$dump=false,$exit=true){
    if($dump){
        $func = 'var_dump';
    }else{
        $func = (is_array($val)||is_object($val))?'print_r':'printf';
    }
    //输出到html
    header("Content-type: text/html;charset=utf-8");
    echo '<pre>debug output:<hr> ';
    $func($val);
    echo '</pre>';
    if($exit) exit;
    
}
?>