
<body>
<?php
    session_start();
    $ac=$_SESSION["account"];
    $aid=$_GET['id'];


    // echo "originusrid=".$ousrid;
    //  echo "usrpasswd=".$usrpasswd;
    //  echo "usremail=".$usremail;
    //  echo "usrsex=".$usrid;
    //  echo "usrpassd=".$usrpasswd;
    //  echo "usremail=".$usremail;


    include("../connection.php");

    $select_db=@mysql_select_db("travel");//進入資料庫
    
    if(!$select_db)
    {
        echo '<br>找不到資料庫！<br>';
    }
    else{
        $sql_query="delete from `usercollect` where `uid` = '".$ac.$aid."' ";
        $result=mysql_query($sql_query);//result是一個矩陣，所有資料的矩陣
        echo '<center><h1>取消收藏成功！';
    }

    ?>
</body>