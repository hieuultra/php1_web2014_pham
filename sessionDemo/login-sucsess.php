<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>login-sucsess</div>
    <div>thong tin tai khoan</div>
    <?php
    // echo "<pre>";
    // var_dump($_COOKIE);
    session_start();
    if (isset($_SESSION['username'], $_SESSION['pass'])) {
        $username = $_SESSION['username'] . "-";
        $pass = $_SESSION['pass'];
        echo $username;
        echo $pass;
        if (time() - $_SESSION['login_time_stamp'] > 30) {
            session_destroy();//huy session 
            header("location:login.php");
        }
    } else {
        echo 'het thoi gian dang nhap';
        echo '<br> dang nhap lai-> <a href="login.php">login</a>';
    }

    ?>
</body>

</html>