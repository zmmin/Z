<?php
/**
 * Created by PhpStorm.
 * User: zhangmin
 * Date: 2018/3/29
 * Time: 22:49
 */
$pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/";
$email = "155214562@nquvn.com";
echo "邮箱:$email";
echo "<br>";
if(preg_match("$pattern",$email)){
    echo "邮箱匹配成功!";
}
else{
    echo "邮箱不能匹配!";
}
echo "<br>";                           //邮箱


echo "<br>";
$phone = "0571-8765342";
$isphone="/^([0-9]{3,4}-)?[0-9]{7,8}$/";
if (preg_match("$isphone",$phone))
{
    echo "$phone"."<br>";
    echo "yes";
}
else
{
    echo "$phone"."<br>";
    echo "no";
}
echo "<br>";                   //号码


echo "<br>";
$password="acsv156843";
echo "密码：$password";
echo "<br>";
if (preg_match("/^[a-zA-Z]([a-zA-Z0-9_]{5,17}$)/",$password))
    echo "合法";
else
    echo "不合法";
echo "<br>";                   //密码


echo "<br>";
$color = "#4f3a45";
if (preg_match("/^#[0-9a-fA-F]{6}$/", $color)) {
    echo $color . " :ture" ;
} else {
    echo $color . ":false" ;
}
echo '<br>';             //16


echo "<br>";
$number="1565 1564 9524 6123";
echo $number;
echo "<br>";
if (preg_match("/^[0-9]{4}\s[0-9]{4}\s[0-9]{4}\s[0-9]{4}$/",$number))
{
    echo "yes";
}
else
{
    echo "no";
}
?>