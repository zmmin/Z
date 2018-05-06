<?php
/**
 * Created by PhpStorm.
 * User: zhangmin
 * Date: 2018/5/6
 * Time: 13:42
 */

$username = $_POST['username'];
    if(isset($_POST['password'])){
        setcookie('password',$_POST['password'],time()+60*60);
        echo "login success!";
    }
    else{
        echo "password is null";
    }
echo "<br>";
    echo $username;
echo "<br>";
echo $_COOKIE['password'];
?>