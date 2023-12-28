<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trang chu</title>
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

    .tk {
        border: 1px solid black;
        width: 80px;
        height: 20px;
        background-color: orange;
        color: black;
    }

    .tk:hover {
        cursor: pointer;
        opacity: 1;
    }

    .name {
        font-size: 20px;
        font-weight: bold;
        color: black;
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

        <section>
            <p>SẢN PHẨM SEARCH</p>
        </section>
        <div class="box-tong">

            <?php
            // Lấy từ khóa tìm kiếm từ URL

            $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';

            // Nếu từ khóa không rỗng, thực hiện truy vấn cơ sở dữ liệu
            if (!empty($keyword)) {
                // Sử dụng câu truy vấn SQL để tìm kiếm sản phẩm
                $sql = "SELECT * FROM products WHERE productName LIKE :keyword";
                $stmt = $conn->prepare($sql);
                $stmt->bindValue(':keyword', '%' . $keyword . '%');
                // gán giá trị cho tham số :keyword. 
                // Đối số đầu tiên là tên tham số :keyword trong câu truy vấn,
                //  và đối số thứ hai là giá trị mà chúng ta muốn gán cho tham số này.
                $stmt->execute();

                // Xử lý kết quả trả về từ truy vấn
                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

                // Hiển thị kết quả

                if (count($results) > 0) {
                    foreach ($results as $row) {
                        // htmlspecialchars: chuyển đổi các ký tự đặc biệt thành các ký tự thích hợp.
                        echo " <div class='box-sp'>";
                        echo "<p class='name'>" . htmlspecialchars($row['productName']) . "</p>";
                        echo "<p class='g'>" . 'Gia: ' . htmlspecialchars($row['price']) . "</p>";
                        echo "<p><img src='../QLsanPham/img/" . $row['image'] . "' class='anh'></p>";
                        echo "<a href='spct.php?productId=" . $row['productId'] . "'>";
                        echo "<button type='submit' class='ct' name='chitiet'>Chi tiết</button>";
                        echo "</a>";
                        echo "</div>";
                    }
                } else {
                    echo "Không tìm thấy kết quả cho từ khóa: " . htmlspecialchars($keyword);
                }
            }
            ?>


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