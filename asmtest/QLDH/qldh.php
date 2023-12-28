<!doctype html>
<html lang="en">

<head>
    <title>quan ly don hang</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../QLsanPham/list-product.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
    .muc-con {
        height: 100px;
    }
</style>

<body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <?php
    require_once '../connect.php';
    session_start();

    if (!isset($_SESSION['username'])) {
        header("location:../QLusers/dangnhap.php");
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
                <h3>Xin chào:<?= (isset($_SESSION['username'])) ? $_SESSION['username'] : ''; ?> </h3>
            </div>
            <div class="product-log">
                <nav>
                    <ul id="main">
                        <li><a href="../khachHang/Trang-chu.php"><i class="fas fa-home"></i> Trang chủ</a></li>
                        <li><a href="../QLusers/dangnhap.php"><i class="fas fa-power-off"></i> Đăng xuất</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <section class="content">
            <div class="left">
                <div class="box-tong">
                    <div class="tieude">DANH MỤC</div>
                    <p class="muc1"><a href="../QLusers/list_user.php">Quản lý User</a></p>
                    <p class="muc1"><a href="../QLDM/list-cat.php">Quản lý Danh Mục </a></p>
                    <p class="muc1"><a href="../QLsanPham/list_product.php">Quản lý Sản Phẩm</a></p>
                    <p class="muc1"><a href="qldh.php">Quản lý đơn hàng </a></p>
                </div>
            </div>
            <div class="right">
                <?php
                $sql = "select * from orderschitiet";
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                $orders = $stmt->fetchAll();

                ?>

                <div class="alert alert-success">
                    <strong> <?= $_GET['mes'] ?? '' ?></strong> I
                </div>

                <div class="td">Thông tin đơn hàng </div>
                <table border="1">
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Product Id</th>
                            <th>Product Quantity</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Date-order</th>
                            <th>Image</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($orders as $o) : ?>
                            <tr>
                                <td class="name"><?= $o['maHD'] ?></td>
                                <td class="sl"><?= $o['productId']  ?></td>
                                <td class="sl"><?= $o['soLuong']  ?></td>
                                <td class="sl"><?= $o['phone']  ?></td>
                                <td class="sl"><?= $o['address']  ?></td>
                                <td class="sl"><?= $o['dateoder']  ?></td>
                                <td class="sl"> <img src="../QLsanPham/img/<?= $o['img']  ?>" alt="" width="120px"> </td>
                                <td class="xoa"> <a onclick="return confirm('ban co chac chan muon xoa khong?')" href="delete-dh.php?maHD=<?= $o['maHD']; ?>"> Xóa</a></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</body>

</html>