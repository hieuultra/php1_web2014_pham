<!DOCTYPE html>
<html>

<head>
    <title>Tính tiền thanh toán</title>
</head>

<body>
    <h1>Tính tiền thanh toán</h1>

    <?php
    if (isset($_POST['btn'])) {
        // Lấy giá trị từ người dùng
        $productName = $_POST["product_name"];
        $price = $_POST["price"];
        $quantity = $_POST["quantity"];

        // Tính tiền thanh toán
        $tien = $price * $quantity;
        $giamgia = 0;

        if ($quantity > 3) {
            $giamgia = 0.1 * $tien; // Giảm giá 10%
        }

        $stptt = $tien - $giamgia;

        // Hiển thị kết quả
        echo "<p>Tên sản phẩm: " . $productName . "</p>";
        echo "<p>Giá: " . $price . "</p>";
        echo "<p>Số lượng: " . $quantity . "</p>";
        echo "<p>Tổng tiền: " . $tien . "</p>";
        echo "<p>Giảm giá: " . $giamgia . "</p>";
        echo "<p>Số tiền phải thanh toán: " . $stptt . "</p>";
    }
    ?>

    <form method="post" action="">
        <label for="product_name">Tên sản phẩm:</label>
        <input type="text" name="product_name" id="product_name" required><br><br>
        <label for="price">Giá:</label>
        <input type="number" name="price" id="price" required><br><br>
        <label for="quantity">Số lượng:</label>
        <input type="number" name="quantity" id="quantity" required><br><br>
        <input type="submit" value="Tính tiền thanh toán" name="btn">
    </form>
</body>

</html>