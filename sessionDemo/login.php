<?php
session_start();
if (isset($_POST['btn'])) {
    // echo "<pre>";
    // var_dump($_SESSION);
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['pass'] = $_POST['pass'];
    $_SESSION['login_time_stamp'] = time(); //kiểm tra thời gian trôi
    // qua từ lúc đăng nhập (được lưu trong biến $_SESSION['login_time_stamp']) 
    //cho đến thời điểm hiện tại (lấy thông qua hàm time())
    header("location:login-sucsess.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="username" id="" placeholder="nhap ten">
        <input type="password" name="pass" id="" placeholder="nhap pass">
        <input type="submit" value="login" name="btn">
    </form>

</body>

</html>