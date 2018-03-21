<?php
/**
 * Created by PhpStorm.
 * User: zhangmin
 * Date: 2018/3/18
 * Time: 14:59
 */
function MaxMin($array){
    sort($array);
    $min=$array[0];
    $max=end($array);
    $num=$max-$min;
    return $num;
}
$array=array(6,7,2,-3,9,5,1,15);
echo MaxMin($array);
?>