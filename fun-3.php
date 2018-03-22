<?php
/**
 * Created by PhpStorm.
 * User: zhangmin
 * Date: 2018/3/22
 * Time: 23:13
 */
$i=57;
$flag=true;
for($j=2;$j<=$i-1;$j++){
    if($i%$j==0){
        $flag=false;
        break;
    }
}
if($flag){
    echo $i."is a Prime num";
}else{
    echo $i.'is not a  Prime num';
}
?>