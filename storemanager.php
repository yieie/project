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
    <body>
        <center>
        <form method="get" action="storemanager02.php"  id="storemanager">
            <table>
                <tr><td colspan="2" align="center"><h1>店家登入</h1></td></tr>
                <tr><td colspan="2">&nbsp</td></tr>
                <tr>
                    <td>店家帳號：</td>
                    <td><input type="text" name="account" maxlength="15" size="10"></td>
                </tr>
                <tr>
                    <td>店家密碼：</td>
                    <td><input type="text" name="passwd" maxlength="10" size="10"></td>
                </tr>
            </table>
            <br>
            <input value="登入" type="submit">
        </form>
    </body>
</html>