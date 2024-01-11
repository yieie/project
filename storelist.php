<!DOCTYPE html>
<html>
    <head>
        <title>店家管理</title>
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
    <script>
    function alert(){

    }    
    </script>
    <body>
    <?php
    $ac=$_GET["account"];

    //  echo 'account='.$ac;
    // echo '<br>passwd= '.$passwd;

    include("connection.php");

    $select_db=@mysql_select_db("travel");

    if(!$select_db)
    {
        echo '<br>找不到資料庫<br>';
    }
    else{
        echo '<center><table width=100% border=0>';
        echo '<tr bgcolor=#CAD8D8>';
        echo '<td align=center>編號';
        echo '<td align=center>店名/景點名';
        echo '<td align=center>地址';
        echo '<td align=center>營業時間';
        echo '<td align=center>google評價';
        echo '<td align=center>電話';
        
        $sql_query="SELECT * FROM `attractionandfood` WHERE `admin` = '".$ac."' ";
        $result=mysql_query($sql_query);//result是一個矩陣，所有資料的矩陣
        $class='even';
        while($row=mysql_fetch_array($result)){
            echo '<tr class="'.$class.'" align=center>';
            echo '<td width=5% >'.$row[0];
            echo '<td width=30%>'.$row[1];
            echo '<td width=20%>'.$row[2];
            echo '<td width=20%>'.$row[3];
            echo '<td width=10%>'.$row[4];
            echo '<td width=10%>'.$row[5];
            echo '<td><input type="button" value="編輯">';
            echo '</tr>';

            if(strcmp($class,'even')==0){
                $class='odd';
            }
            else{
                $class='even';
            }
        }
        echo '</table>';
    }
    
    ?>
    </body>
</html>