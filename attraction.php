<!DOCTYPE html>
<html>
    <head>
        <title>Metrovel</title>
    </head>
    <style>
        body{
            background-color: #CAD8D8;
        }

        button{
            height:30px;
            width:200px;
            border-radius:5px;
        }

        .even{
            background-color:#D0CE9F;
        }
        .odd{
            background-color:#CAD8D8;
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
            include("connection.php");

            $select_db=@mysql_select_db("travel");
        
            if(!$select_db)
            {
                echo '<br>找不到資料庫<br>';
            }
            else{
                
                // echo '<center><table width=100% border=0>';
                // echo '<tr bgcolor=#D0CE9F>';
                // echo '<td align=center width=5%>編號';
                // echo '<td align=center width=30%>店名/景點名';
                // echo '<td align=center width=20%>地址';
                // echo '<td align=center width=20%>營業時間';
                // echo '<td align=center width=10%>google評價';
                // echo '<td align=center width=10%>電話';
                
                $sql_query="SELECT * FROM `attractionandfood` WHERE aid LIKE 'a-%'";
                $result=mysql_query($sql_query);//result是一個矩陣，所有資料的矩陣
                echo '<center><table border=0 width=100%>';
                echo '<tr>';
                $cnt=0;
                while($row=mysql_fetch_array($result)){
                    $cnt++;
                    if($cnt%5==1 && $cnt>5){
                        echo '<tr>';
                    }
                        echo '<td width=20%><center><img src=./picture/spot.svg width=80><br>';
                        echo "<a href=attractionlist.php?id=".$row[0].">".$row[1]."</a></td>";
                }
                echo "</table>";
            }
        ?>
    </body>
</html>