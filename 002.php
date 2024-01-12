<!DOCTYPE html>
<?php
session_start();//宣告session之前不可以有html的字串輸出
?>
<html>
<head>
    <title>Metrovel</title>
</head>
<frameset rows="10%,90%" border=0>
                <frame name="header" scrolling="no" noresize target="main" src="header.php" >
                <frame name="main" src="home.php">
                <noframes>
                </noframes>

</frameset>
<body>
</body>

</html>