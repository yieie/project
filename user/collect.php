<!DOCKTYPE html>
<?php
session_start();//宣告session之前不可以有html的字串輸出
?>
<html>
<head>
</head>
	<style>
        body{
            background-color: #CAD8D8;
        }

        button{
            height:50px;
            width:100px;
            border-radius:5px;
        }


        .even{
            background-color:#CAD8D8;
        }
        .odd{
            background-color:#D0CE9F;
        }
        a{
            background-color:#D0CE9F;
            text-decoration:none;
            color:black;
        }
        a:hover{
            background-color:black;
            color:#D0CE9F;
        }
    </style>
<body>
<?php
    $ac=$_SESSION['account'];
    $aid=$_GET["aid"];
    // echo $ac;
    // echo $aid;
    // 連接資料庫
    include("../connection.php");
    // 選擇 travel 資料庫
    $select_db = mysql_select_db("travel");
    if (!$select_db) {
        echo '<br>找不到資料庫!<br>';
    }
    else {
            $sql_query="INSERT INTO usercollect VALUES ('".$ac.$aid."', '".$ac."','".$aid."')";
            $result=mysql_query($sql_query);

            echo "<center><h1>收藏成功</h1>";
    }


?>
</body>

</html>