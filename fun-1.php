<?php
/**
 * Created by PhpStorm.
 * User: zhangmin
 * Date: 2018/3/21
 * Time: 17:06
 */

function reverse($n){
    if(strlen($n)>0){
        reverse(substr($n,1));
        echo substr($n,0,1);
        return;
    }
}
reverse("123456");
?>