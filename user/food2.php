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
    </style>
<body>




<?php
    $id=$_GET["id"];
    $ac=$_SESSION["account"];

	//連接資料庫

	include("../connection.php");

	$select_db = mysql_select_db("travel");//選擇資料庫

	if(!$select_db)
	{
		echo '<br>找不到資料庫!<br>';

	}
	else
	{

		$sql_query = "select * from attractionandfood where aid='".$id."' ";//下sql語法
		$result=mysql_query($sql_query);//執行sql語法，執行完會丟到result
        
        echo '<form method=get action=collect.php>';
		echo '<center><table width=100% border=0>';
		echo '<tr>';
        
		if($row=mysql_fetch_array($result))
		{
			echo '<center>
			<table width=30% border=0>';
            echo '<tr>
            <td colspan=2><center><img src=../picture/food.svg width=80><br>';
            echo '<tr>
            <td align=right width=25%>店名：</td>
            <td align=left width=25%>'.$row[1].'</td>';
            echo '<tr bgcolor=#D0CE9F>
            <td align=right>地址：</td>
            <td align=left>'.$row[2].'</td>';
            echo '<tr>
            <td align=right>營業時間：</td>
            <td align=left>'.$row[3].'</td>';
            echo '<tr bgcolor=#D0CE9F>
            <td align=right>google評價：</td>
            <td align=left>'.$row[4].'</td>';
            echo '<tr>
            <td align=right>電話：</td>
            <td align=left>'.$row[5].'</td>';
		}
        // echo '<tr>
        // <td align=right>帳號：</td>
        // <td align=left><input type=text name=account></td>';
        
        if($ac!=NULL){
            echo '<input type=hidden name=aid value='.$row[0].'>';
            echo '<tr align=center>
            <td colspan=2><input type=submit value="收藏"></td>';
            
        }
		
		echo "</table>";
        echo "</form>";
        

			

	}
		
?>
