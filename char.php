<?php
/**
 * Created by PhpStorm.
 * User: zhangmin
 * Date: 2018/3/29
 * Time: 21:36
 */
$file='abc.exe.txt';
echo strstr($file,"txt",false);    //获取后缀txt
echo "<br>";

$str = 1234567890;
function str($str){
    $new_str=strrev($str);
    $new_str= chunk_split($new_str,3,',');
    return strrev(rtrim($new_str,','));
}
echo str($str)."<br>";                                  //科学计数

$char_1 = "hello_world";
$char_2 = "rem_by_child";
$len_1 = strlen($char_1);
$len_2 = strlen($char_2);
$char_n1 = str_replace("_"," ",$char_1,$len_1);
$char_n2 = str_replace("_"," ",$char_2,$len_2);
echo ucwords($char_n1)."<br>";
echo ucwords($char_n2);

?>