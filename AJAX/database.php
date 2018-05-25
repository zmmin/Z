<?php
/**
 * Created by PhpStorm.
 * User: zhangmin
 * Date: 2018/5/24
 * Time: 18:25
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
// 设置编码，防止中文乱码
//mysqli_set_charset($con, "utf8");

/*$q=$_GET["q"];

if(empty($q)) {
    echo '请输入商品：';
    exit;
}*/

if(!$_GET['p'])$page = 1;
if($_GET['p'])$page=$_GET['p'];
//echo $page;
//$page=1;

///if(strlen($q) > 0) {
    //$sql = "SELECT * FROM product WHERE pname like  '" .$q. "'ORDER BY pname LIMIT ".(($page-1)*2).",2";
    $sql = "SELECT * FROM product LIMIT ".(($page-1)*2).",2";
    $result = mysqli_query($conn, $sql);
    //$total_records = mysqli_num_rows($result);  // 统计总共的记录条数
    //$total_page = $total_records/2;

    echo"<br>";
    echo "<table border='1'>
<tr>
<th>商品名称</th>
<th>商品价格</th>
</tr>";

    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['pname'] . "</td>";
        echo "<td>" . $row['pprice'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    //echo $total_page;
//}

//mysqli_close($con);

?>