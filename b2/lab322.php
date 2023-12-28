<!DOCTYPE html>
<html>

<head>
    <title>Kết quả tìm giá cao nhất</title>
</head>

<body>
    <h1>Kết quả tìm giá cao nhất</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Lấy dữ liệu từ form
        $ten_sp1 = $_POST["ten_sp1"];
        $gia_sp1 = $_POST["gia_sp1"];

        $ten_sp2 = $_POST["ten_sp2"];
        $gia_sp2 = $_POST["gia_sp2"];

        $ten_sp3 = $_POST["ten_sp3"];
        $gia_sp3 = $_POST["gia_sp3"];

        // Hiển thị thông tin sản phẩm
        echo "<h2>Thông tin sản phẩm:</h2>";
        echo "<p>$ten_sp1 - Giá: $gia_sp1</p>";
        echo "<p>$ten_sp2 - Giá: $gia_sp2</p>";
        echo "<p>$ten_sp3 - Giá: $gia_sp3</p>";

        // Hàm tìm giá cao nhất và thông báo kết quả
        function gcn($gia_sp1, $gia_sp2, $gia_sp3)
        {
            global $ten_sp1;
            global $ten_sp2;
            global $ten_sp3;
            $max_gia = max($gia_sp1, $gia_sp2, $gia_sp3);
            $result = '';

            if ($max_gia == $gia_sp1) {
                $result = "$ten_sp1. - Giá cao nhất: $max_gia";
            } elseif ($max_gia == $gia_sp2) {
                $result = "$ten_sp2 - Giá cao nhất: $max_gia";
            } else {
                $result = "$ten_sp3 - Giá cao nhất: $max_gia";
            }

            return $result;
        }

        // Gọi hàm tìm giá cao nhất và hiển thị kết quả
        $ket_qua = gcn($gia_sp1, $gia_sp2, $gia_sp3);
        echo "<h2>Kết quả tìm giá cao nhất:</h2>";
        echo "<p>$ket_qua</p>";
    }
    ?>
</body>

</html>