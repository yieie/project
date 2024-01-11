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
            include("connection.php");

            $select_db=@mysql_select_db("travel");
        
            if(!$select_db)
            {
                echo '<br>找不到資料庫<br>';
            }
            else{
                
                echo '<center><table width=100% border=0>';
                echo '<tr bgcolor=#D0CE9F>';
                echo '<td align=center width=5%>編號';
                echo '<td align=center width=30%>店名/景點名';
                echo '<td align=center width=20%>地址';
                echo '<td align=center width=20%>營業時間';
                echo '<td align=center width=10%>google評價';
                echo '<td align=center width=10%>電話';

                $sql_query="SELECT * FROM `attractionandfood` WHERE aid LIKE 'a-%'";
                $result=mysql_query($sql_query);//result是一個矩陣，所有資料的矩陣
                while($row=mysql_fetch_array($result)){
                    echo '<tr class="'.$class.'" align=center>';
                    echo '<td>'.$row[0];
                    echo '<td>'.$row[1];
                    echo '<td>'.$row[2];
                    echo '<td>'.$row[3];
                    echo '<td>'.$row[4];
                    echo '<td>'.$row[5];
                    echo '</tr>';

                    if(strcmp($class,'even')==0){
                        $class='odd';
                    }
                    else{
                        $class='even';
                    }
                }
            
            }
        ?>
    </body>
</html>