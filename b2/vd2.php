<!-- tao 1 trang dang nhap gom email va pass, kiem tra xem email co la:admin
 @fpt, pass: 123@abc, neu dung hien thi tb: dang nhap thanh cong, else: sai.. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dang nhap</title>
</head>

<body>
    <h2>Dang nhap</h2>
    <form action="" method="post">
        <label>Email:</label>
        <input type="text" name="email" id="">
        <br><br>
        <label>Mật khẩu:</label>
        <input type="text" name="pass" id="">
        <br><br>
        <button type="submit" name="submit">submit</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        if ($email == "admin@fpt.edu.vn" && $pass == "123@abc") {
            echo "dang nhap thanh cong";
        } else {
            echo "sai email hoac mat khau...vui long thu lai!";
        }
    }
    ?>
</body>

</html>