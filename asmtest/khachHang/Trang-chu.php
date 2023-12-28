<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trang chu</title>
    <link rel="stylesheet" type="text/css" href="trang-chu.css">
    <!-- <link href='https://css.gg/shopping-cart.css' rel='stylesheet'> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
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
        height: 350px;
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

    .ct {
        background-color: blue;
        color: white;
        width: 100px;
        height: 30px;
        border-radius: 13px;
        margin-top: 30px;
    }

    .ct:hover {
        background-color: orange;
    }

    .name {
        font-size: 20px;
        font-weight: 900;
        color: black;

    }

    .dm {
        line-height: 30px;
        font-size: 20px;
        font-weight: bold;
        margin-left: 20px;
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

    //lay data cat
    $sql = "select * from categories";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $cat = $stmt->fetchAll();
    ?>

    <div class="wrapper">
        <header>
            <div class="logo">
                <img src="anh/lg.jpg">
                <a href="" class="z">
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

        <div class="content">
            <div class="danhmuc">
                <ul>
                    <?php foreach ($cat as $c) : ?>
                        <li><a href="#" class="dm"><?= $c['catname'] ?></a></li>
                    <?php endforeach ?>
                </ul>
            </div>

            <div class="slideshow-container">

                <div class="mySlides">
                    <a href="#"> <img src="slideshow/anh1.jpg" height="500px" width="1100px"></a>
                </div>
                <div class="mySlides">
                    <a href="#"> <img src="slideshow/anh2.jpg" height="500px" width="1100px"></a>
                </div>

                <div class="mySlides ">
                    <a href="#"> <img src="slideshow/anh3.jpg" height="500px" width="1100px"></a>
                </div>

                <div class="mySlides ">
                    <a href="#"> <img src="slideshow/anh4.jpg" height="500px" width="1100px"></a>
                </div>
                <div class="mySlides ">
                    <a href="#"> <img src="slideshow/anh5.jpg" height="500px" width="1100px"></a>
                </div>
                <div class="mySlides ">
                    <a href="#"> <img src="slideshow/anh6.jpg" height="500px" width="1100px"></a>
                </div>
                <div class="mySlides">
                    <a href="#"></a> <img src="slideshow/anh7.jpg" height="500px" width="1100px"></a>
                </div>
                <div class="mySlides">
                    <a href="#"> <img src="slideshow/anh8.jpg" height="500px" width="1100px"></a>
                </div>

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
        </div>
        <section>
            <p>SẢN PHẨM NỔI BẬT </p>
        </section>
        <div class="box-tong">


            <?php foreach ($pro as $item) : ?>
                <div class="box-sp">
                    <p class="name"><?php echo $item['productName'] ?> </p>
                    <p class="g">Gia: <?php echo $item['price'] ?> VND </p>

                    <a href="spct.php?productId=<?php echo $item['productId']; ?>">
                        <p id="anh"><img src="../QLsanPham/img/<?php echo $item['image'] ?>" class="anh"></p>
                    </a>

                    <a href="spct.php?productId=<?php echo $item['productId']; ?>">
                        <button type="submit" class="ct" name="chitiet">Chi tiet</button>
                    </a>
                </div>
            <?php endforeach ?>

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

    <!-- phần script -->
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");

            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slides[slideIndex - 1].style.display = "block";
        }

        //anh chay auto khi vao trang web
        setInterval(function() {
            slideIndex++;
            showSlides(slideIndex);
        }, 1500);
    </script>
</body>

</html>