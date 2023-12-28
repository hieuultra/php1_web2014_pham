<?php
include_once "../classes/user_class.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dang nhap</title>
</head>

<body>
    <?php
    //khoi tao doi tuong tu lop users_class
    $user = new user_class();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //LAY DU LIEU TU FORM
        $adminEmail = $_POST['adminEmail'];
        $adminPass = $_POST['adminPass'];
        $check_login = $user->login($adminEmail, $adminPass);
    }
    ?>
    <form action="login.php" method="post">
        <h1>dang nhap</h1>
        <p>
            <?php if(isset($check_login)) echo $check_login; ?>
        </p>
        <p>
            Email: <input type="text" name="adminEmail" id="" required>
        </p>
        <p>
            Pass: <input type="text" name="adminPass" id="" required>
        </p>
        <p>
            <input type="submit" value="dang nhap">
        </p>

    </form>
</body>

</html>