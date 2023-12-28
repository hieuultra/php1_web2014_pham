<?php
require_once 'conection.php';
session_start();
$loi = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username == '') {
        $loi['username'] = 'ban chua nhap username';
    } else {
        $sql = "select * from user where username='$username'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        //NEU CO USERNAME TRONG DATABASE
        if ($user) {
            //so sanh vs password
            if ($user['password'] == $password) {
                //login sucsses
                // tao session luu tru thong tin username
                $_SESSION['username'] = $username;
                header("location:product.php");
                die;
            } else {
                $loi['password'] = "password sai";
            }
        } else {
            $loi['username'] = "username sai";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>

<body>
    <form action="" method="post">
        username: <input type="text" name="username" id="">
        <span style="color:red">
            <?= $loi['username'] ?? '' ?>
        </span>
        <br>
        <br>
        password <input type="password" name="password" id="">
        <div> <?= (isset($loi['password'])) ? $loi['password'] : '' ?></div>
        <br>
        <br>
        <button type="submit">login</button>
    </form>
</body>

</html>