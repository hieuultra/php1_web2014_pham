<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>san pham chi tiet</title>
</head>
<link rel="stylesheet" href="trang-chu.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


<style>
    .t {
        margin: 20px 0;
        margin-left: 600px;
        color: black;
        font-size: 30px;
        font-weight: bold;
    }

    .box-sp {
        width: 1100px;
        height: 890px;
        margin: 0px 20px;
        padding: 10px;
        margin-bottom: 20px;
    }

    .anh {
        width: 500px;
        height: 300px;
    }

    .g {
        color: red;
    }

    .h {
        color: blue;
    }

    .a {
        color: black;
    }

    .copy {
        background-color: darkgrey;
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 20px;
        padding: 40px;
    }

    input {
        background-color: orange;
        border: 1px solid black;
        padding: 10px 30px;
        color: white;
        border-radius: 3px 0 0 3px;
    }

    ::placeholder {
        opacity: 1;
        color: white;
    }

    .btn2 {
        background-color: orange;
        border-radius: 3px 0 0 3px;
        color: white;
    }

    .btn2:hover {
        cursor: pointer;
        background-color: gold;
    }

    .dc,
    .sv,
    .hl {
        padding: 34px 0;
        padding-left: 5px;
    }

    .logo {
        display: flex;
        align-items: center;
        font-weight: bold;
    }

    .z {
        color: white;
        padding: 0 10px;
    }

    .y {
        color: white;
        padding: 0 10px;
    }

    .z,
    .y {
        text-decoration: none;
    }

    .z:hover,
    .y:hover {
        color: orange;
    }

    #main {
        font-weight: bold;
        align-items: center;
    }

    .search {
        width: 200px;
        height: 30px;
    }

    .form-group {
        font-weight: bold;
        font-size: 20px;
        margin-left: 100px;
    }

    .form-control {
        font-weight: bold;
        font-size: 20px;
        margin-left: 10px;
    }

    .ct {
        background-color: blue;
        color: white;
    }

    .ct:hover {
        background-color: orange;
    }

    .gia {
        font-weight: 400;
        color: red;
        margin-top: 10px;
    }

    .mt {
        color: black;
        padding: 10px 20px;

    }

    .tt {
        font-size: 20px;
        color: red;
    }

    .ml {
        font-weight: bold;
        color: orange;
    }

    .nt {
        padding: 20px;
        color: black;

    }

    .add {
        margin: 10px;
        background-color: black;
        color: white;
        width: 170px;
    }

    .add:hover {
        background-color: orange;
        opacity: 1;
        cursor: pointer;
    }

    .add1 {
        margin: 10px;
        background-color: black;
        color: white;
        width: 170px;
    }

    .add1:hover {
        background-color: orange;
        opacity: 1;
        cursor: pointer;
    }

    .as {
        float: right;
    }

    .as img {
        width: 300px;
        height: 600px;
    }

    footer {
        width: 1230px;
    }

    .mh {
        width: 200px;
        height: 50px;
        border: 1px solid red;
        background-color: red;
    }

    .mh:hover {
        cursor: pointer;
        background-color: orange;
    }

    .ttlh {
        padding: 10px 0;
        color: black;
        font-size: 20px;
    }

    .dcc {
        height: 40px;
        width: 220px;
    }

    .lh {
        display: inline-block;
    }

    .mota {
        display: flex;
    }

    .alert {
        text-align: center;
        color: blue;
        font-size: 30px;
        font-weight: bold;

    }

    .loi {
        color: red;
    }
</style>

<body>
    <?php
    require_once '../connect.php';
    if (isset($_GET['productId'])) {
        $id = $_GET['productId'];
        $sql = "select * from products where productId=$id";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $pro = $stmt->fetch();
    }
    if (isset($_POST['muahang'])) {
        $proid = $pro['productId'];
        $sl = $_POST['sl'];
        $sdt = $_POST['sdt'];
        $dc = $_POST['diachi'];
        $dg = $pro['price'];
        $img=  $pro['image'];

        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $currentDateTime = date('Y-m-d H:i:s', time());

        if ($sdt  == '') {
            $loi['sdt'] = "ban chua nhap so dien thoai";
        }
        if ($dc  == '') {
            $loi['diachi'] = "ban chua nhap dia chi";
        }
        if ($sl == '') {
            $loi['sl'] = "ban chua nhap so luong ";
        }
        if ($sdt && $dc != '') {
            $sql = "insert into orderschitiet (productId,soLuong,donGia,phone,address,dateoder,img) 
            values ('$proid','$sl','$dg','$sdt','$dc','$currentDateTime','$img')";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $mes = "Dat hang thanh cong!!";
        }
    }
    ?>
    <div class="wrapper">
        <header>
            <div class="logo">
                <a href="Trang-chu.php">
                    <img src="anh/lg.jpg">
                </a>
                <a href="Trang-chu.php" class="z">
                    Trang chủ
                </a>
                <a href="sanpham.php" class="y">
                    Sản phẩm </a>
                <a href="#" class="y">
                    Liên hệ
                </a>
            </div>
            <div class="nav">
                <nav>
                    <ul id="main">
                        <input type="text" placeholder="SEARCH" class="search">
                        <li><a href="../QLusers/dangnhap.php">Đăng nhập</a></li>
                        <!-- <span>/</span><a href="">Đăng kí</a> -->
                        <li><a href="giohang.php">Giỏ hàng <i class="fas fa-cart-plus"></i></a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <div class="t">
            SHOP ĐỒ ĐIỆN TỬ
        </div>

        <div class="box-tong">
            <div class="box-sp">
                <form action="" method="post">
                    <div class="as"> <img src="../QLsanPham/img/as.jpg" alt=""></div>
                    <div class="sp">
                        <h3 class="productId"></h3> <?= $pro['productId']  ?> </h3>
                        <h2><?= $pro['productName']  ?> </h2>
                        <a href="#">
                            <p id="anh"><img src="../QLsanPham/img/<?= $pro['image'] ?>  " class="anh"></p>
                        </a>
                        <p class="gia">Giá: <?= $pro['price']  ?> VND </p>
                        <p>
                        <h3>So luong:<?= $pro['quantity'] ?> </h3>
                        </p>
                        <div class="mota">
                            <input type='text' name='sl' class="add" />
                            <div class="loi"><?= $loi['sl'] ?? '' ?></div>
                            <p class="mt">
                            <h3>Mô tả:</h3> <?= $pro['mota'] ?> </p>
                            <p class="mt">
                            <h3>Trang thai:</h3> <?= $pro['productStatus'] == 1 ? 'con hang' : 'het hang' ?> </p>
                        </div>

                        <div class="ttlh">
                            <p>Thong tin lien he</p>
                        </div>

                        <input type="text" name="sdt" placeholder="nhap so dien thoai" class="sdt">
                        <br>
                        <br>
                        <div class="loi"><?= $loi['sdt'] ?? '' ?></div>
                        <input type="text" name="diachi" id="" placeholder="nhap dia chi" class="dcc"><br>
                        <br>
                        <div class="loi"><?= $loi['diachi'] ?? '' ?></div>

                        <br>
                        <a href="../QLDH/qldh.php">
                            <button type="submit" name="muahang" class="mh">Mua ngay</button>
                        </a>
                        <div class="sc">
                            <div class="alert">
                                <?= $mes ?? '' ?>
                            </div>

                        </div>
                </form>

            </div>
        </div>


        <div style="clear:both">
        </div>
        <div class="copy">
            <div class="ft">
                <div class="lg">
                    <img src="anh/lg.jpg" width="230px" height="50px">
                </div>
                Infinity là hệ thống chuyên cung <br>cấp điện thoại chính hãng của <br> các thương hiệu lớn như Xiaomi,
                Iphone,Samsung Chúng tôi sẽ liên <br>tục cập nhật những sản phẩm mới <br> nhất,
                chất lượng nhất, giúp các bạn<br> có những trải nghiệm tuyệt vời!
            </div>

            <div>
                Địa chỉ
                <hr>
                <p class="dc">NAM HUNG - TIEN HAI - THAI BINH
                    Số 2, Nguyễn Cơ Thạnh, NAM HUNG, TIEN HAI, THAI BINH</p>
            </div>
            <div>
                Dịch vụ
                <hr>
                <p class="sv">
                    Bảo hành rơi vỡ, ngấm nước Care Diamond

                    Bảo hành Care X60 rơi vỡ ngấm nước vẫn Đổi mới
                </p>
            </div>
            <div>
                Hotline
                <hr>
                <p class="hl">
                    Phone Sale: (+84) 0352 860 701

                    Email: vinacase@gmail.com
                </p>
            </div>
        </div>
        <footer>
            <p>BUI TRUNG HIEU PH32408</p>
        </footer>

    </div>
</body>

</html>