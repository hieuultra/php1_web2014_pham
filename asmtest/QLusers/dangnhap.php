<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dang nhap</title>
    <link rel="stylesheet" href="dangnhap.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
</head>
<style>
    .loi{
        font-size: 20px;
        font-weight: bold;
    }
    p{
    font-size: 20px;
    font-weight: bold;
    }
</style>
<body>
    <?php
    require_once '../connect.php';
    session_start();
    if (isset($_POST['submit'])) {
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];
    }
    $loi = array();
    $loi1 = array();

    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if ($username == '') {
            $loi['username'] = 'Ban chua nhap username!';
        }
        if ($password == '') {
            $loi1['password'] = 'Ban chua nhap password!';
        }

        if ($username && $password != '') {
            $sql = "select * from user where username='$username' and password ='$password'";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $users = $stmt->fetch();
            if ($users != false) {
                $_SESSION['login_time_stamp'] = time();
                header("location:list_user.php");
            } else {
                $loi2 = "Ban da nhap sai username hoac password";
            }
        }
    }
    ?>
    <div class="wrapper">
        <div class="box">
            <h1 class="tieude">ĐĂNG NHẬP</h1>
            <form action="" method="POST">
                <p>
                    Username<input type="text" name="username" id="user" placeholder=" Nhập Username" class="text">
                <div class="loi"><?php echo (isset($loi['username'])) ? $loi['username'] : ''; ?></div>
                </p>
                <p>
                    Password<input type="password" name="password" id="pass" placeholder=" Nhập Password" class="text">
                <div class="loi"><?php echo (isset($loi1['password'])) ? $loi1['password'] : ''; ?> </div>
                </p>
                <input type="checkbox" id="checkbox-1-1" class="custom-checkbox" />
                <label for="checkbox-1-1">Keep me Signed in</label>

                <p align="center" style="color: red;">
                    <?php echo (isset($loi2)) ? $loi2 : ''; ?>
                </p>
                <p>
                    <button type="submit" name="submit">Đăng nhập</button>
                </p>
                <hr>

                <a href="#">Forgot Password?</a>
            </form>
        </div>
    </div>
</body>

</html>