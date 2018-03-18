<?php
/**
 * Created by PhpStorm.
 * User: zhangmin
 * Date: 2018/3/18
 * Time: 13:45
 */
function CreateArray($first,$length){
    for($i=$first;$i<$length;$i++){
        $num=$i*2+1;
        $array[]=$num;
    }
    return $array;
}
print_r(CreateArray(0,10));
?>