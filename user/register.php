<!DOCTYPE html>
<html>
    <head>
        <title>會員註冊</title>
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
        $usraccount=$_GET["account"];
        $usrname=$_GET["name"];
        $usrpasswd=$_GET["passwd"];

        // echo "usrid=".$usrid;
        // echo "usrpasswd=".$usrpasswd;
        // echo "usremail=".$usremail;
        // echo "usrsex=".$usrid;
        // echo "usrpassd=".$usrpasswd;
        // echo "usremail=".$usremail;


        include("../connection.php");

        $select_db=@mysql_select_db("travel");//進入資料庫
        if(!$select_db)
        {
            echo '<br>找不到資料庫！<br>';
        }
        else{
            $sql_query0="select * from userlist where account ='".$usraccount."'";
            $result=mysql_query($sql_query0);
            if(mysql_num_rows($result)==0){
                $sql_query="INSERT INTO userlist VALUES ('".$usraccount."', '".$usrname."', '".$usrpasswd."' )";
                mysql_query($sql_query);
                echo '新增成功';
            }
            else{
                echo '<h1>此帳號已被註冊過</h1>';
            }

        }


        ?>
    </body>
</html>