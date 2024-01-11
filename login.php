<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
    <?php
    $ac=$_GET["account"];
    $passwd=$_GET["passwd"];

    // echo 'account='.$ac;
    // echo '<br>passwd= '.$passwd;

    include("connection.php");

    $select_db=@mysql_select_db("travel");

    if(!$select_db)
    {
        echo '<br>找不到資料庫<br>';
    }
    else{
        // echo '歡迎光臨';
        
        $sql_query="SELECT * FROM `userlist` WHERE `account` = '".$ac."' and password = '".$passwd."'";
        $result=mysql_query($sql_query);//result是一個矩陣，所有資料的矩陣

        echo mysql_num_rows($result);

        if(mysql_num_rows($result)){
            // echo '歡迎光臨';
            $row=mysql_fetch_array($result);
            echo '<br>account:'.$row[0];
            // echo '<br>不存在此帳號<br>';
            // echo '<a href="main.php">點此回上頁註冊或以訪客模式瀏覽</a>';
        }
        else{
            echo '帳號不存在';
            
            // if(strcmp($row[2],$passwd)){
            //     echo '密碼錯誤';
            // }
            // else{
            //     echo '正確';

            // }
        }
    }
    
    ?>
    </body>
</html>