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
            $mrt=$_GET["mrt"];

            // echo $mrt;

            include("../connection.php");

            $select_db=@mysql_select_db("travel");
        
            if(!$select_db)
            {
                echo '<br>找不到資料庫<br>';
            }
            else{
                if($mrt==NULL ){
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
                            echo '<td width=20%><center><img src=../picture/spot.svg width=80><br>';
                            echo "<a href=attraction2.php?id=".$row[0].">".$row[0].$row[1]."</a></td>";
                    }
                    echo "</table>";
                }
                else{
                    $sql_query="SELECT * FROM `distance` WHERE mid='".$mrt."' and aid LIKE 'a-%'";
                    $result=mysql_query($sql_query);
                    // if(mysql_num_rows($result)==0){
                    //     echo '無資料';
                    // }
                    echo '<center><table border=0 width=100%>';
                    echo '<tr>';
                    $cnt=0;
                    while($row=mysql_fetch_array($result)){
                        $sql_query0="SELECT * FROM `attractionandfood` WHERE aid='".$row[2]."'";
                        $result0=mysql_query($sql_query0);

                        if($row0=mysql_fetch_array($result0)){
                            $cnt++;
                            if($cnt%5==1 && $cnt>5){
                                echo '<tr>';
                            }
                                echo '<td width=20%><center><img src=../picture/spot.svg width=80><br>';
                                echo "<a href=attraction2.php?id=".$row0[0].">".$row0[1]."</a>
                                <p>距離：".$row[3]."m <br>步行時間約：".$row[4]."</td>";
                        }
                        
                    }
                    echo "</table>";
                }
            }
        ?>
    </body>
</html>