<?php
session_start();
if (isset($_POST['btn'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === 'admin' && $password === '12346') {
        //tao 1 session luu thong tin
        $_SESSION['username'] = $username;
        header("location:list-air.php");
        die;
    } else {
        $error = "sai username hoac password";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../asmtest/QLusers/dangnhap.css">
</head>

<style>
    .loi {
        color: rebeccapurple;
    }

    input {
        width: 500px;
        height: 30px;
        padding: 2px;
        margin: 10px auto;
    }
</style>

<body>
    <div class="wrapper">
        <div class="box">
            <h1 class="tieude">ĐĂNG NHẬP</h1>
            <form method="POST" action="">
                username <input type="text" name="username" placeholder="Username" required><br>
                password <input type="password" name="password" placeholder="Password" required><br>
                <input type="submit" name="btn" value="Login">
            </form>
            <div class="loi">
                <?= $error ?? ''; ?>
            </div>
        </div>
    </div>
</body>

</html>