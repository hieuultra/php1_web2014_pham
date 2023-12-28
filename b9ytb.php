<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $message = array();
    $user = array();
    if (isset($_POST['btn'])) {
        $user['username'] = isset($_POST['username']) ? $_POST['username'] : '';
        if ($user['username'] == "") {
            $message['username'] = 'ban chua nhap user name';
        }
        $user['pass'] = isset($_POST['pass']) ? $_POST['pass'] : '';
        if ($user['pass'] == "") {
            $message['pass'] = 'BAN CHUA NHAP PASS';
        }
    }

    ?>
    <form action="" method="post">
        <div>
            <input type="text" name="username" id="" placeholder="username">
            <div>
                <?php echo isset($message['username']) ?  $message['username'] : ''; ?>
            </div>
        </div>
        <div>
            <input type="password" name="pass" id="" placeholder="pass">
            <div>
                <?php echo isset($message['pass']) ? $message['pass'] : ''; ?>
            </div>
        </div>
        <div>
            <input type="submit" value="dang nhap" name="btn">
        </div>
    </form>
</body>

</html>