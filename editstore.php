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

    //  echo 'account='.$ac;
    // echo '<br>passwd= '.$passwd;

    include("connection.php");

    $select_db=@mysql_select_db("travel");

    if(!$select_db)
    {
        echo '<br>找不到資料庫<br>';
    }
    else{
        
        $sql_query="SELECT * FROM `attractionandfood` WHERE `aid` = '".$id."' ";
        $result=mysql_query($sql_query);//result是一個矩陣，所有資料的矩陣
        
        $row=mysql_fetch_array($result);
        echo '<form method="get" action="editstore02.php">';
        echo '<center>
        <table width=30% border=0>';
        echo '<tr bgcolor=#D0CE9F>
        <td align=right width=25%>編號：</td>
        <td align=left width=25%>'.$id.'</td>
        <input name="id" type=hidden value='.$id.'>';
        echo '<tr>
        <td align=right>店名/景點名：</td>
        <td align=left><input name="name" type=text size=20 maxlength=50 value='.$row[1].'>';
        echo '<tr bgcolor=#D0CE9F>
        <td align=right>地址：</td>
        <td align=left><input name="address" type=text size=20 maxlength=50 value='.$row[2].'>';
        echo '<tr>
        <td align=right>營業時間：</td>
        <td align=left><textarea rows=7 name="optime">'.$row[3].'</textarea>';
        echo '<tr bgcolor=#D0CE9F>
        <td align=right>google評價：</td>
        <td align=left>'.$row[4].'</td>
        <input name="rate" type=hidden value='.$row[4].'>';
        echo '<tr>
        <td align=right>電話：</td>
        <td align=left><input name="tel" type=text size=15 maxlength=15 value='.$row[5].'>';
        echo '<tr align=center>
        <td><input type=submit value="更改">
        <td><input type=reset value="重設">'; 
        echo '</table>';
        echo '</form>';
       
    }
    
    ?>
    </body>
</html>