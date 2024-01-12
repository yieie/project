<style>
    
    body{
        background-color:#CAD8D8 ;
    }
</style>

<?php
session_start();
if(isset($_SESSION['account']))
{
    unset($_SESSION['account']);
}
echo '<center><h1>登出成功</h1>';
?>