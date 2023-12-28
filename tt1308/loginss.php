<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    session_start();
    if (isset($_POST['btn'])) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        if ($user == 'ph32408' && $pass == 'ph32408') {
            $_SESSION['user'] = $user;
            header("location:list-course.php");
            die;
        } else {
            $err = 'sai tai khoan hoac mat khau';
        }
    }
    ?>
    <h1>dang nhap</h1>

    <form action="" method="post">
        <p>
            username <input type="text" name="user" id="">
        </p>
        <p>
            password <input type="text" name="pass" id="">
        </p>
        <p>
            <input type="submit" value="login" name="btn">
        </p>
        <div style="color: red;">
            <?= $err ?? '' ?>
        </div>
    </form>

</body>

</html>