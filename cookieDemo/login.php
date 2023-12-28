<?php
if (isset($_POST['btn'])) {
    setcookie('username', $_POST['username'], time() + 10);
    // thời gian hết hạn là 10 giây kể từ thời điểm hiện tại.
    setcookie('password', $_POST['pass'], time() + 10);
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