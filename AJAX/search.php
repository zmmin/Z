<?php
/**
 * Created by PhpStorm.
 * User: zhangmin
 * Date: 2018/5/18
 * Time: 11:09
 */


//?>

<html>
<head>
    <!--<script>
        function showResult(str)
        {
            if (str.length==0)
            {
                document.getElementById("search").innerHTML="";
                document.getElementById("search").style.border="0px";
                return;
            }
            if (window.XMLHttpRequest)
            {// IE7+, Firefox, Chrome, Opera, Safari 浏览器执行
                xmlhttp=new XMLHttpRequest();
            }
            else
            {// IE6, IE5 浏览器执行
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function()
            {
                if (xmlhttp.readyState==4 && xmlhttp.status==200)
                {
                    document.getElementById("search").innerHTML=xmlhttp.responseText;
                    document.getElementById("search").style.border="1px solid #A5ACB2";
                }
            }
            xmlhttp.open("GET","MySQL.php?q="+str,true);
            xmlhttp.send();
        }
    </script>-->
</head>
<body>

<form action="MySQL.php" method="get">
    input cno:
     <input type="int" name="cno" size="11" value="" /><br/>
    <input type="submit" name="search" value="search">
    <!--<input type="text" size="30" onkeyup="showResult(this.value)">
    <div id="search"></div>-->
</form>


</body>
</html>
