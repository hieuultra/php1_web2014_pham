<!DOCTYPE html>
<html>
<head>
    <title>Trang Đăng Nhập</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        $password = $_POST["password"];
        
        // Kiểm tra email và mật khẩu
        if ($email == "admin@fpt.edu.vn" && $password == "123@abc") {
            echo "Đăng nhập thành công!";
        } else {
            echo "Đăng nhập thất bại. Vui lòng kiểm tra lại thông tin đăng nhập!";
        }
    }
    ?>
    
    <h2>Đăng nhập</h2>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label>Email:</label>
        <input type="text" name="email"><br><br>
        
        <label>Mật khẩu:</label>
        <input type="text" name="password"><br><br>
        
        <input type="submit" value="Đăng nhập">
    </form>
</body>
</html>
