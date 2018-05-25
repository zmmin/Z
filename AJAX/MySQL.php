<form>
    input cno:
    <input type="int" name="cno" size="11" value="<?php if($q = $_GET["cno"]){echo $q;}?>" /><br/>
    <a herf="MySQL.php?cno = 1"></a>
</form>
<?php
/**
 * Created by PhpStorm.
 * User: zhangmin
 * Date: 2018/5/18
 * Time: 11:10
 */

$num_rec_per_page=2;   // 每页显示数量
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
$start_from = ($page-1) * $num_rec_per_page;

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

//mysqli_connect('localhost','root','');  // 数据库连接
//mysqli_select_db('database_s');  // 数据库名

//从请求URL地址中获取 q 参数
$q = $_GET["cno"];
$s = $q;
//echo $q;
$sql = "SELECT * FROM course WHERE cno = '$s' ORDER BY cno LIMIT $start_from, $num_rec_per_page";
$rs_result = mysqli_query ($conn,$sql); // 查询数据

/*$sq2 = "SELECT cno FROM course";
$cno_result = mysqli_query ($conn,$sq2); // 查询数据
$a = mysqli_num_rows($cno_result);
$b = mysqli_fetch_assoc($cno_result);*/


/*//查找是否由匹配值， 如果 q>0
if (strlen($q) > 0)
{
    $hint="";
    for($i=0; $i<count($b); $i++)
    {
        if (strtolower($q)==strtolower(substr($b[$i],0,strlen($q))))
        {
            if ($hint=="")
            {
                $hint=$b[$i];
            }
            else
            {
                $hint=$hint." , ".$b[$i];
            }
        }
    }
}

// 如果没有匹配值设置输出为 "no suggestion"
if ($hint == "")
{
    $response="no suggestion";
}
else
{
    $response=$hint;
}

//输出返回值
echo $response;*/



?>
<table>
    <tr><td>cno</td><td>cname</td><td>teacher</td><td>cplace</td></tr>
    <?php
    while ($row = mysqli_fetch_assoc($rs_result)) {
        ?>
        <tr>
            <td><?php echo $row['cno']; ?></td>
            <td><?php echo $row['cname']; ?></td>
            <td><?php echo $row['teacher']; ?></td>
            <td><?php echo $row['cplace']; ?></td>
        </tr>
        <?php
    };
    ?>
</table>
<?php
//$q=$_GET["cno"];
$sql = "SELECT * FROM course WHERE cno = '$q'";
$rs_result = mysqli_query($conn,$sql); //查询数据
$total_records = mysqli_num_rows($rs_result);  // 统计总共的记录条数
$total_pages = ceil($total_records / $num_rec_per_page);  // 计算总页数

echo "<a href='MySQL.php?page=1'>".'|<'."</a> "; // 第一页

for ($i=1; $i<=$total_pages; $i++) {
    echo "<a href='MySQL.php?page=".$i."'>".$i."</a> ";
};
echo "<a href='MySQL.php?page=$total_pages'>".'>|'."</a> "; // 最后一页
?>