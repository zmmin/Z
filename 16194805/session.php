<?php
/**
 * Created by PhpStorm.
 * User: zhangmin
 * Date: 2018/5/6
 * Time: 14:56
 */

session_start();
$username = $_POST['s_username'];
if(isset($_POST['s_password'])){
    $_SESSION['s_password'] = $_POST['s_password'];
    echo "login success!";
}
else{
    echo "password is null";
}
echo "<br>";
echo $username;
echo "<br>";
echo $_SESSION['s_password'];
?>