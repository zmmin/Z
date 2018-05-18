<?php
/**
 * Created by PhpStorm.
 * User: zhangmin
 * Date: 2018/5/11
 * Time: 11:44
 */

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database_s";

// 创建连接
$conn = mysqli_connect($servername, $username, $password, $dbname);

// 检测连接
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$cno = $_POST['cno'];
$cnamename = $_POST['cname'];
$teacher = $_POST['teacher'];
$cplace = $_POST['cplace'];


$sql="INSERT INTO course (cno, cname, teacher,cplace)
VALUES
('$cno','$cnamename','$teacher','$cplace')";

if (mysqli_query($conn, $sql)) {
    echo "新记录插入成功"."<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sq2 = "SELECT cno, cname, teacher,cplace FROM course";
$result = mysqli_query($conn, $sq2);

if (mysqli_num_rows($result) > 0) {
    // 输出数据
    while($row = mysqli_fetch_assoc($result)) {
        echo "cno: " . $row["cno"]. " cName: " . $row["cname"]. " teacher" . $row["teacher"]." cplace" . $row["cplace"]. "<br>";
    }
} else {
    echo "0 结果";
}

mysqli_close($conn)
?>