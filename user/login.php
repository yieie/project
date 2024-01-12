<!DOCTYPE html>
<html>
    <head>

    </head>
    <style>
        body{
            background-color: #CAD8D8;
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
    $ac=$_GET["account"];
    $passwd=$_GET["passwd"];

    // echo 'account='.$ac;
    // echo '<br>passwd= '.$passwd;

    include("../connection.php");

    $select_db=@mysql_select_db("travel");

    if(!$select_db)
    {
        echo '<br>找不到資料庫<br>';
    }
    else{
        // echo '歡迎光臨';
        
        $sql_query="SELECT * FROM `userlist` WHERE `account` = '".$ac."' and password = '".$passwd."'";
        $result=mysql_query($sql_query);//result是一個矩陣，所有資料的矩陣

        if(mysql_num_rows($result)){
            $row=mysql_fetch_array($result);
            echo '<h1><center>'.$row[1].'，歡迎光臨</h1>';
            echo '<br><br><h1><center><a href=../home.php?account='.$ac.'>點此回首頁</a></h1>';
        }
        else{
            echo '帳號不存在';
        }
    }
    
    ?>
    </body>
</html>