<!DOCTYPE html>
<html>
    <head>
        <title>Metrovel</title>
    </head>
    <style>
        body{
            background-color: #9BC0CC;
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
            include("connection.php");

            $select_db=@mysql_select_db("travel");
        
            if(!$select_db)
            {
                echo '<br>找不到資料庫<br>';
            }
            else{
                
                $sql_query="SELECT * FROM `mrt` WHERE 1";
                $result=mysql_query($sql_query);//result是一個矩陣，所有資料的矩陣
                echo '<form method="get" target=right action=food1.php>捷運站：<select name="mrt">';
                echo '<option value=0 selected>請選擇</option>';
                while($row=mysql_fetch_array($result)){
                    echo '<option value='.$row[0].'>'.$row[0].$row[1].'</option>';
                }
                echo '</select>
                
                <input value="送出" type="submit"></form>';
            }
        ?>
    </body>
</html>