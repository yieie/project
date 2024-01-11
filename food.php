<!DOCKTYPE html>

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

// 連接資料庫
include("connection.php");
// 選擇 travel 資料庫
$select_db = mysql_select_db("travel");
if (!$select_db) {
    echo '<br>找不到資料庫!<br>';
}
else {
    $sql_query = "SELECT * FROM attractionandfood WHERE aid LIKE 'f-%' ";
    $result = mysql_query($sql_query);

        echo '<center><table width=100% border=0>';
		echo'<tr>';

		$cnt=-1;
		while($row=mysql_fetch_array($result))
		{
			$cnt++;
			if($cnt%5==0){
				echo '<tr>';
			}
			echo '<td width=20%><center><img src=./picture/food.svg width=80><br>';
			echo '<a href=food2.php?id='.$row[0].' target="main" >'.$row[1].'</a>';
		}
		echo "</table>";
		
}


?>
</body>

</html>