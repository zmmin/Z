<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>
</head>
<body>
<?php
session_start();
?>

<form action="cookie.php" method="post">
    username:<input type="text" name="username" size="11" value="" /><br/>
    password:<input type="password" name="password" size="11" value="" /><br/>
    <input type="checkbox" name="expire" value="3600" checked/>Cookie保存1小时<br/>
    <input type="submit" value="登录" />
</form>>
<form action="session.php" method="post">
    username:<input type="text" name="s_username" size="11" value="" /><br/>
    password:<input type="password" name="s_password" size="11" value="" /><br/>
    <input type="submit" value="登录" />
</form>
</body>
</html>