<!DOCTYPE >
<html >
<head>
    <title>简单计算器</title>
</head>
<body>
<form action="calculator.php" method="post">
    请输入第一个数：<input type="text" name="num1" size="11" value="<?php if(!empty($_POST)){echo $_POST['num1'];}/*if (isset($_POST['num1'])){echo "";}*/?>" /><br/>
    请输入第二个数：<input type="text" name="num2" size="11" value="<?php if(!empty($_POST)){echo $_POST['num2'];}/*if (isset($_POST['num2'])){echo "";}*/?>" /><br/>
    请选择运算符：
    <select name="value">
        <option value="+" selected>+</option>
        <option value="-" selected>-</option>
        <option value="*" selected>*</option>
        <option value="/">/</option>
    </select>
    <br>
     <input type="submit" name="calculate" value="计算">
        <input type="reset" name="cancel" value="重置">
    <br>
    运算结果为：
    <?php
    if (isset($_POST['num1'])){$num1 = $_POST['num1'];}
    if (isset($_POST['num2'])){$num2 = $_POST['num2'];}
    //if (isset($_POST["value"])){$symbol = $_POST["value"];}
    $result =0;
    if($_POST['value'] == "+"){$result = $num1 + $num2 ;}
    if($_POST['value'] == "-"){$result = $num1 - $num2 ;}
    if($_POST['value'] == "*"){$result = $num1 * $num2 ;}
    if($_POST['value'] == "/"){$result = $num1 / $num2 ;}
    if(isset($_POST['calculate'])){
        echo $result;}
    ?>
</form>
</body>
</html>


