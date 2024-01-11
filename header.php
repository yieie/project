<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<script>
    function back(){
    }
</script>
<style>
    body{
        background-color: #ECECFF;
       /* #a582c3;  */
    }
    .list1{
        display: none;
    }
    .list2{
        position: absolute;
        right:5px;
    }
    img{
        width:200px;
    }
    .member{
        border: 0;
        background-color: #ECECFF;
        text-align: center;
    }
</style>
<body>

    <table class="list1">
        <tr>
            <td><img src='picture/logo.png'></td>
            <td><button><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
            <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4z"/>
          </svg>首頁</button></td>
            <td>美食</td>
            <td>景點</td>
        
        </tr>
    </table>
    <table class="list2">
        <tr>
            <td><a href="main.php">首頁</a><td>
            <td><button class="member">登入</button></td>
            <td>|</td>
            <td><button class="member">註冊</button></td>
        </tr>

    </table>
</body>
</html>