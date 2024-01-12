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
            height:50px;
            width:100px;
            border-radius:5px;
        }

        .even{
            background-color:#D0CE9F;
        }
        .odd{
            background-color:#CAD8D8;
        }
    </style>
    <body>
        <?php
            $id=$_GET["id"];
            include("../connection.php");

            $select_db=@mysql_select_db("travel");
        
            if(!$select_db)
            {
                echo '<br>找不到資料庫<br>';
            }
            else{
                echo '<form method=get action=collect.php>';
                $sql_query="SELECT * FROM `attractionandfood` WHERE aid='".$id."'";
                $result=mysql_query($sql_query);//result是一個矩陣，所有資料的矩陣
                if($row=mysql_fetch_array($result)){
                    echo '<center>
                    <table width=30% border=0>';
                    echo '<tr>
                    <td colspan=2><center><img src=../picture/spot.svg width=80><br>';
                    echo '<tr>
                    <td align=right width=25%>店名/景點名：</td>
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

                
                echo '<tr>
                <td align=right>帳號：</td>
                <td align=left><input type=text name=account></td>';
                echo '<input type=hidden name=aid value='.$row[0].'>';
                echo '<tr align=center>
                <td colspan=2><input type=submit value="收藏"></td>';
                // if($id!=NULL){
                //     echo '<tr>
                //     <>'
                // }
                
                echo "</table>";
                echo "</form>";
            
            }
        ?>
    </body>
</html>