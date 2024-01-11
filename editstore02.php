<!DOCTYPE html>
<html>
    <head>
        <title>店家管理</title>
    </head>
    <style>
        body{
            background-color: #CAD8D8;
        }
    </style>
    <script>
    function alert(){

    }    
    </script>
    <body>
    <?php
    $id=$_GET["id"];
    $storename=$_GET["name"];
    $address=$_GET["address"];
    $optime=$_GET["optime"];
    $rate=$_GET["rate"];
    $tel=$_GET["tel"];

    //  echo 'account='.$ac;
    // echo '<br>passwd= '.$passwd;

    include("connection.php");

    $select_db=@mysql_select_db("travel");

    if(!$select_db)
    {
        echo '<br>找不到資料庫<br>';
    }
    else{
        
        $sql_query="UPDATE `attractionandfood` SET name='".$storename."', address='".$address."', optime='".$optime."', tel='".$tel."' where aid='".$id."';";
        $result=mysql_query($sql_query);//result是一個矩陣，所有資料的矩陣
        echo '資料更改成功';
       
    }
    
    ?>
    </body>
</html>