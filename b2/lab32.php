<!DOCTYPE html>
<html>

<head>
    <title>Thông tin sản phẩm</title>
</head>

<body>
    <h1>Thông tin sản phẩm</h1>
    <form action="lab322.php" method="post">
        <label>Sản phẩm 1 - Tên:</label>
        <input type="text" name="ten_sp1" required>
        <label>Giá:</label>
        <input type="number" name="gia_sp1" step="0.01" min="0" required><br>

        <label>Sản phẩm 2 - Tên:</label>
        <input type="text" name="ten_sp2" required>
        <label>Giá:</label>
        <input type="number" name="gia_sp2" step="0.01" min="0" required><br>

        <label>Sản phẩm 3 - Tên:</label>
        <input type="text" name="ten_sp3" required>
        <label>Giá:</label>
        <input type="number" name="gia_sp3" step="0.01" min="0" required><br>

        <input type="submit" value="send">
    </form>
</body>

</html>