<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>san pham</title>
    <link rel="stylesheet" type="text/css" href="trang-chu.css">
    <!-- <link href='https://css.gg/shopping-cart.css' rel='stylesheet'> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<style>
    .t {
        margin: 20px 0;
        margin-left: 600px;
        color: black;
        font-size: 30px;
        font-weight: bold;
    }

    .box-sp {
        width: 260px;
        height: 340px;
        margin: 0px 20px;
        border: 1px solid #000;
        padding: 10px;
        float: left;
        text-align: center;
        border-radius: 10px;
        margin-bottom: 20px;
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
        margin-top: 50px;
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
        width: 100px;
        height: 30px;
        border-radius: 2px;
        margin-top: 20px;
    }

    .ct:hover {
        background-color: orange;
    }

    .name {
        font-size: 20px;
        font-weight: 900;
        color: black;

    }
    .tk{
        border: 1px solid black;
        width: 80px;
        height: 20px;
        background-color: orange;
        color: black;
    }
    .tk:hover{
        cursor: pointer;
        opacity: 1;
    }
</style>

<body>
    <?php

    require_once '../connect.php';
    $sql = 'select * from products';
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $pro = $stmt->fetchAll();
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
                        <form action="search.php" method="GET">
                            <input type="text" placeholder="SEARCH" class="search" name="keyword">
                            <button type="submit" name="tk" class="tk">Tìm kiếm</button>
                        </form>
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

        <form action="" method="post">
            <div class="form-group">
                <label for="">Chọn danh mục</label>
                <select class="form-control" name="dm" id="dm" onchange="this.form.submit()">
                    <!-- this sẽ trỏ tới thẻ <select> mà người dùng đã thay đổi giá trị. -->
                    <option value="">--Tất cả--</option>
                    <option value="1">Điện thoại</option>
                    <option value="3">Đồng hồ</option>
                    <option value="2">Laptop</option>
                    <option value="4">Phụ kiện </option>
                    <option value="5">Tablet </option>
                </select>
            </div>
        </form>
        <?php
        if (isset($_POST['dm'])) {
            $selectedCategory = $_POST['dm'];

            // Nếu người dùng chọn "--Tất cả--", không lọc theo loại hàng
            if ($selectedCategory === '') {
                $sql = 'SELECT * FROM products';
            } else {
                // Nếu người dùng đã chọn loại hàng, lọc sản phẩm theo loại hàng được chọn
                $sql = "SELECT * from products WHERE typeId = $selectedCategory";
            }
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $pro = $stmt->fetchAll();
        }

        ?>

        <section>
            <p>SẢN PHẨM </p>
        </section>
        <div class="box-tong">
            <?php if (!empty($pro)) : ?>
                <?php foreach ($pro as $item) : ?>
                    <div class="box-sp">
                        <p class="name"><?php echo $item['productName'] ?> </p>
                        <p class="g">Gia: <?php echo $item['price'] ?> </p>
                        <a href="spct.php?productId=<?php echo $item['productId'] ?>">
                            <p id="anh"><img src="../QLsanPham/img/<?php echo $item['image'] ?>" class="anh"></p>
                        </a>
                        <a href="spct.php?productId=<?php echo $item['productId'] ?>">
                            <button type="submit" class="ct" name="chitiet">Chi tiet</button>
                        </a>
                    </div>
                <?php endforeach ?>
            <?php else : ?>
                <p>Không có sản phẩm nào phù hợp với loại hàng đã chọn.</p>
            <?php endif; ?>
        </div>

        <div style="clear:both">
        </div>
        <div class='copy'>
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