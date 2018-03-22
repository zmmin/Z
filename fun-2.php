<?php
/**
 * Created by PhpStorm.
 * User: zhangmin
 * Date: 2018/3/22
 * Time: 22:35
 */
function narcissistic($n)
{
$hundreds=floor($n/100);//分解出百位
$tens=floor($n/10)%10;//分解出十位
$ones=floor($n%10);//分解出个位
return(bool)(pow($hundreds,3)+pow($tens,3)+pow($ones,3)==$n);
}

function judge($a)
{
    $hundreds=floor($a/100);//分解出百位
    $tens=floor($a/10)%10;//分解出十位
    $ones=floor($a%10);//分解出个位
    if(pow($hundreds,3)+pow($tens,3)+pow($ones,3)==$a){return 1;}
    else {return 0;}
}
echo judge(574)."<br>";
for($i=100;$i<999;++$i)
{
    if(narcissistic($i))
        echo$i."<br>";
}
?>