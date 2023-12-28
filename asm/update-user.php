<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $id = $_GET['id'];
    $conn = new PDO("mysql:host=127.0.0.1;dbname=asm18314;charset=utf8", "root", "");
    $query = "select * from user where id = $id";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $user = $stmt->fetch(); //lay ra 1 phan tu
    // echo "<pre>";
    // var_dump($user);
    ?>
    <form action="save-update.php" method="post">
        <div>
            <input type="text" name="user-id" value="<?php echo $user['id']; ?> " hidden>
        </div>
        <input type="text" name="username" id="" value="<?php echo $user['username']; ?>"> <br>
        <input type="text" name="pass" id="" value="<?php echo $user['password']; ?>"><br>
        <input type="submit" value="cap nhat" name="btn">
    </form>

</body>

</html>