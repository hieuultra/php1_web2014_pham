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
    if (isset($_COOKIE['username'], $_COOKIE['password'])) {
        $username = $_COOKIE['username'] . "-";
        $pass = $_COOKIE['password'];
        echo $username;
        echo $pass;
    } else {
        echo 'ban da ngoi choi qua lau roi';
        echo '<br>thich thi bam vao dang nhap lai-> <a href="login.php">login</a>';
    }

    ?>
</body>

</html>