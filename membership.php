<!DOCTYPE html>
<html>
    <head>
        <title>會員登入/註冊</title>
        <link rel="stylesheet" href="css/membership.css">
    </head>
    <script src="js/membership.js"></script>
    <body>
        <center>
        <table border="0" width="50%">
            <tr><td colspan=2 align=center><font size=6>會員登入/註冊</font>
                <tr><td colspan=2 align=center><p>&nbsp
                <tr align=center>
                <p><br>
            <tr align=center>
                <td><button onclick="display('login')">登入</td>
                <td><button onclick="display('register')">註冊</td>
            </tr>
        </table>

        <form method="get" action="login.php"  id="login">
        <table>
            <tr><td colspan="2" align="center">會員登入</td></tr>
            <tr><td colspan="2">&nbsp</td></tr>
            <tr>
                <td>會員帳號：</td>
                <td><input type="text" name="account" maxlength="15" size="10"></td>
            </tr>
            <tr>
                <td>會員密碼：</td>
                <td><input type="text" name="passwd" maxlength="10" size="10"></td>
            </tr>
        </table>
        <br>
        <input value="登入" type="submit">
        </form>

        <form method="get" action="register.php"  id="register">
            <table>
                <tr><td colspan="2" align="center">會員註冊</td></tr>
                <tr><td colspan="2">&nbsp</td></tr>
                <tr>
                    <td align="right">會員帳號：</td>
                    <td align="left"><input type="text" name="account" maxlength="15" size="10"></td>
                </tr>
                <tr>
                    <td align="right">會員暱稱：</td>
                    <td align="left"><input type="text" name="name" maxlength="10" size="10"></td>
                </tr>
                <tr>
                    <td>會員密碼：</td>
                    <td><input type="password" name="passwd" maxlength="10" size="10"></td>
                </tr>
            </table>
            <br>
            <input value="註冊" type="submit">
            <input value="取消" type="reset">
            </form>
    </body>
</html>
