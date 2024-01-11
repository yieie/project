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
            text-decoration=none;
            color=black;
        }

        a{
            text-decoration: none;
            color: black;
        }
    </style>
    <script>
    function changehref(let c){
        location.href=c+".php";
    }    
    </script>
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
        
        $sql_query="SELECT * FROM `storelist` WHERE `account` = '".$ac."' and password = '".$passwd."'";
        $result=mysql_query($sql_query);//result是一個矩陣，所有資料的矩陣

        if(mysql_num_rows($result)){
            $row=mysql_fetch_array($result);
            // echo '<br>account:'.$row[0];
            
            echo '<center>
            <table width=50%>
            <tr><td colspan="2" align=center><h2>Welcome '.$row[1].'</h2></td></tr>
            <tr><td colspan="2" align=center>&nbsp</td></tr>
            <tr align=center>
            <td><button><a href=storelist.php?account='.$ac.'>您的店家清單</button></td>
            <td><button><a href=storechange.php?account='.$ac.'>管理您的店家</button></td>
            </tr>';// <td><button><a href=storeadd.php?account='.$ac.'>新增您的店家</button></td>
            echo '<input type="hidden" name="account" value='.$ac.'>';
            echo '</form>';

        }
        else{
            echo '帳號不存在';
        }
    }
    
    ?>
    </body>
</html>