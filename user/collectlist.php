<!DOCTYPE html>
<?php
session_start();
$ac=$_SESSION["account"];
?>
<html>
    <head>
    </head>
    <style>
    
    body{
        background-color:#CAD8D8 ;
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
        
        if($ac==NULL){
            echo '<center><h1>尚未登入<br>請先登入後再查看收藏名單</h>';
        }
        else{
            include("../connection.php");
            // 選擇 travel 資料庫
            $select_db = mysql_select_db("travel");
            if (!$select_db) {
                echo '<br>找不到資料庫!<br>';
            }
            else {
                    $sql_query="SELECT * FROM usercollect WHERE account='".$ac."' ";
                    $result=mysql_query($sql_query);
                    if(mysql_num_rows($result)==0){
                        echo '<center><h1>尚未有收藏的店家</h>';
                    }
                    $cnt=0;
                    echo '<center><table border=0 width=100%>';
                    echo '<tr>';
                    while($row=mysql_fetch_array($result)){
                        $sql_query0="SELECT * FROM attractionandfood WHERE aid='".$row[2]."'";
                        $result0=mysql_query($sql_query0);
                        
                        
                        while($row0=mysql_fetch_array($result0)){
                            $cnt++;
                            if($cnt%5==1 && $cnt>5){
                                echo '<tr>';
                            }
                                echo '<td width=20%><center><img src=../picture/spot.svg width=80><br>';
                                echo "<a href=collectlist1.php?id=".$row0[0].">".$row0[1]."</a></td>";
                        }
                        

                    }
                    echo "</table>";
            }
        }
        ?>
    </body>
</html>