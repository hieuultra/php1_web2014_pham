<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sach nguoi dung</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../asmtest/QLusers/list-user.css">
</head>
<style>
    .title-adm {
        color: white;

    }

    .right,
    .td {
        width: 1440px;
    }

    .ten {
        width: 20px;
    }

    .fl {
        width: 200px;
    }

    .mk {
        width: 100px;
    }

    .e {
        width: 250px;
    }

    .img {
        width: 400px;
    }

    .ad {
        width: 100px;
    }
</style>

<body>
    <?php
    require_once "conect.php";
    session_start();
    if (!isset($_SESSION['username'])) {
        header("location:login.php");
        die;
    }
    if (isset($_SESSION['username'], $_SESSION['password'])) {
        $username = $_SESSION['username'];
        $password = $_SESSION['password'];
        if (time() - $_SESSION['login_time_stamp'] > 600) {
            session_destroy();
            header('location:login.php');
        }
    }
    ?>
    <div class="wrapper">
        <header>
            <div class="title-adm">
                <h3>Xin chao:<?= (isset($_SESSION['username'])) ? $_SESSION['username'] : ''; ?> </h3>
            </div>
            <div class="product-log">
                <nav>
                    <ul id="main">
                        <li><a href="dangky.php"><i class="fas fa-home"></i>Dang ky user</a></li>
                        <li><a href="login.php"><i class="fas fa-power-off"></i> Đăng xuất</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <section class="content">

            <div class="right">

                <?php
                $username = $_SESSION['username'];
                $sql = "select * from users where username = '$username'";
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                $users = $stmt->fetchAll();
                ?>
                <div class="alert alert-success">
                    <em> <?= $_GET['me'] ?? '' ?></em>
                </div>
                <div class="td">Thông tin tài khoản</div>
                <table border="1">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Fullname</th>
                            <th>Password</th>
                            <th>Email</th>
                            <th>Avatar</th>
                            <th>Address</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $u) : ?>
                            <tr>
                                <td class="ten"><?= $u['username'] ?></td>
                                <td class="fl"><?= $u['fullname'] ?></td>
                                <td class="mk"><?= $u['password'] ?></td>
                                <td class="e"><?= $u['email'] ?></td>
                                <td class="img"> <img src="img/<?= $u['avatar'] ?>" class="anh" width="300px"> </td>
                                <td class="ad"><?= $u['address'] ?></td>
                                <td class="sua"><a href="sua-pass.php?id=<?= $u['id'] ?>">Sua password</a></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>

</body>

</html>