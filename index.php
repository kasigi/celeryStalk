<?php
/**
 * Created by PhpStorm.
 * User: seneca
 * Date: 2/7/16
 * Time: 9:51 PM
 */


if(isset($_REQUEST['a']) && isset($_REQUEST['b'])){
    $a = intval($_REQUEST['a']);
    $b = intval($_REQUEST['b']);
    echo $a + $b;
}else{
    echo 0;
}