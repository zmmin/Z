<?php
/**
 * Created by PhpStorm.
 * User: zhangmin
 * Date: 2018/3/18
 * Time: 14:17
 */
function MaxKey($array){
    $Maxvalue=max($array);
    foreach($array as $key=>$value){
        if($Maxvalue==$value){
            $maxkey=$key;
        }
    }
    return $maxkey;
}
$array=array(1,9,-6,8,2,5,7);
echo MaxKey($array);
?>