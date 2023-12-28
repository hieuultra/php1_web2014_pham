<!doctype html>
<html lang="en">

<head>
    <title>Thêm mới User</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../asmtest/QLusers/add-user.css">
</head>
<style>
    button {
        margin-left: 20px;
        width: 400px;
    }

    .box {
        height: 700px;
    }

    form {
        margin-left: 80px;
    }

    .dnd {
        margin-left: 180px;
    }

    button:hover {
        background-color: orange;
        opacity: 1;
        border: none;
    }

    #fullname,
    #email,
    #address,
    #pass,
    #user {
        width: 400px;
        height: 30px;
        margin: 10px 0 20px 33px;
        padding: 0 10px;
        border-radius: 5px;
    }

    #avatar {
        margin: 10px 0 20px 30px;
    }
</style>

<body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <?php
    require_once 'conect.php';
    $loi = array();
    $loi1 = array();
    $loi2 = array();
    $loi3 = array();
    $loi4 = array();
    $loi5 = array();
    if (isset($_POST['submit'])) {
        $user = $_POST['username'];
        $full = $_POST['fullname'];
        $pass = $_POST['password'];
        $email = $_POST['email'];
        $file = $_FILES['avatar'];
        $img = $file['name'];
        move_uploaded_file($file['tmp_name'], "img/" . $img);
        $address = $_POST['address'];
        if ($user == '') {
            $loi['username'] = 'Ban chua nhap username!!';
        }
        if ($full == '') {
            $loi1['fullname'] = 'Ban chua nhap fullname!!';
        }
        if ($pass == '') {
            $loi2['password'] = 'Ban chua nhap password!!';
        }
        if ($email == '') {
            $loi3['email'] = 'Ban chua nhap email!!';
        }
        if ($img == '') {
            $loi4['avatar'] = 'Ban chua chon anh!!';
        }
        if ($address == '') {
            $loi5['address'] = 'Ban chua nhap dia chi!!';
        }
        if ($user && $full && $pass && $email && $img && $address != '') {
            $sql = "insert into users(username,fullname,password,email,avatar,address) 
            values ('$user','$full','$pass','$email','$img','$address')";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $e = 'dang ky thanh cong';
        }
    }
    ?>
    <div class="alert alert-success">
        <strong style="text-align: center;"><?= $e ?? '' ?></strong>
    </div>
    <div class="wrapper">
        <div class="box">
            <h1 class="tieude">DANG KY USER</h1>
            <form action="" method="post" enctype="multipart/form-data">
                <p>
                    <input type="text" name="username" id="user" placeholder="Nhập Username">
                <div class="loi"> <?= isset($loi['username']) ? $loi['username'] : '' ?></div>
                </p>
                <p>
                    <input type="text" name="fullname" id="fullname" placeholder="Nhập fullname">
                <div class="loi"> <?= isset($loi1['fullname']) ? $loi1['fullname'] : '' ?></div>
                </p>
                <p>
                    <input type="password" name="password" id="pass" placeholder="Nhập Password">
                <div class='loi'> <?= isset($loi2['password']) ? $loi2['password'] : '' ?></div>
                </p>
                <p>
                    <input type="text" name="email" id="email" placeholder="Nhập email">
                <div class="loi"> <?= isset($loi3['email']) ? $loi3['email'] : '' ?></div>
                </p>
                <p>
                    <input type="file" name="avatar" id="avatar">
                <div class="loi"> <?= isset($loi4['avatar']) ? $loi4['avatar'] : '' ?></div>
                </p>
                <p>
                    <input type="text" name="address" id="address" placeholder="Nhập address">
                <div class="loi"> <?= isset($loi5['address']) ? $loi5['address'] : '' ?></div>
                </p>
                <p>
                    <button type="submit" name="submit">dang ky</button>
                </p>
                <p class="dnd">
                    <a href="login.php" class="dn">dang nhap</a>
                </p>

            </form>

        </div>

    </div>
</body>

</html>