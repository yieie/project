<?php

//連接資料庫
    $location = "localhost";//連到本機
    $account = "root";
    $password = "12345678";
    if(isset($location) && isset($account) && isset($password))
    {
        $link=mysql_pconnect($location,$account,$password);
        if(!$link)
        {
            echo '無法連接資料庫';
            exit();

        }
    }
?>