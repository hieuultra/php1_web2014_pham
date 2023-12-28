<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 100%;
        }

        th {
            background-color: black;
            color: white;
        }
    </style>
</head>

<body>
    <?php
    $connection = new PDO("mysql:host=127.0.0.1;dbname=asm18314;charset=utf8", "root", "");
    //PDO: php data object : la 1 class cung cap cac pt de ket noi va truy xuat DB
    //kết nối với cơ sở dữ liệu MySQL
    $query = "select * from user";
    $stmt = $connection->prepare($query);
    //dung de truy cap vap pt cua PDO
    //prepare(): pt chuan bi 1 cau lenh SQL
    $stmt->execute(); //thuc thi
    $user = $stmt->fetchAll(); //lay ra tat ca du lieu trong table user
    // echo "<pre>";
    // var_dump($user);
    // var_dump($user[0]);

    ?>
    <div>thong tin tai khoan</div>
    <a href="adduser.php">them moi user</a>
    <table>
        <thead>
            <tr>
                <th>username</th>
                <th>password</th>
                <th colspan="2">action</th>
            </tr>
        </thead>
        <tbody>
            <!-- <tr>
                <td><?php echo $user[0]['username']; ?> </td>
                <td> <?php echo $user[0]['password']; ?></td>
            </tr>
            <tr>
                <td><?php echo $user[1]['username']; ?> </td>
                <td> <?php echo $user[1]['password']; ?></td>
            </tr>
            <tr>
                <td><?php echo $user[2]['username']; ?> </td>
                <td> <?php echo $user[2]['password']; ?></td>
            </tr> -->
            <?php foreach ($user as $u) : ?>
                <tr>
                    <td><?php echo $u['username']; ?> </td>
                    <td> <?php echo $u['password']; ?></td>
                    <!-- Dấu "?" được sử dụng trong URL để chỉ định các tham số truy vấn.  -->
                    <td><a href="update-user.php?id=<?php echo $u['id'] ?>">sua</a></td>
                    <td><a href="delete-user.php?id=<?php echo $u['id'] ?>">xoa</a></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>

</html>