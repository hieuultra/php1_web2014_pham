<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sach nguoi dung</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="list-user.css">
</head>
<style>
    .title-adm {
        color: white;

    }
</style>

<body>
    <?php
    require_once "../connect.php";
    session_start();

    if (!isset($_SESSION['username'])) {
        header("location:dangnhap.php");
        die;
    }

    if (isset($_SESSION['username'], $_SESSION['password'])) {
        $username = $_SESSION['username'];
        $password = $_SESSION['password'];
        if (time() - $_SESSION['login_time_stamp'] > 600) {
            session_destroy();
            header('location:dangnhap.php');
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
                        <li><a href="../khachHang/Trang-chu.php"><i class="fas fa-home"></i>Trang chủ</a></li>
                        <li><a href="../QLusers/dangnhap.php"><i class="fas fa-power-off"></i> Đăng xuất</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <section class="content">
            <div class="left">
                <div class="box-tong">
                    <div class="tieude">DANH MỤC</div>
                    <p class="muc1"><a href="list_user.php">Quản lý User</a></p>
                    <p class="muc-con"><a href="add-user.php">+ Thêm mới User</a></p>
                    <p class="muc1"><a href="../QLDM/list-cat.php">Quản lý Danh Mục </a></p>
                    <p class="muc1"><a href="../QLsanPham/list_product.php">Quản lý Sản Phẩm</a></p>
                    <p class="muc1"><a href="../QLDH/qldh.php">Quản lý đơn hàng </a></p>
                </div>
            </div>

            <div class="right">

                <?php

                $sql = "select * from user";
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
                            <th>Password</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $u) : ?>
                            <tr>
                                <td class="ten"><?= $u['username'] ?></td>
                                <td class="mk"><?= $u['password'] ?></td>
                                <td class="sua"><a href="update-user.php?id=<?= $u['id'] ?>">Sửa</a></td>
                                <td class="xoa"><a onclick="return confirm('ban co chac chan muon xoa khong?')" href="delete-user.php?id=<?= $u['id'] ?>">Xóa</a></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>

</body>

</html>