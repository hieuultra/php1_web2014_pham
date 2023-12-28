<!doctype html>
<html lang="en">

<head>
    <title>Thêm mới User</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="add-user.css">
</head>
<style>
    button {
        margin-left: 20px;
    }

    button:hover {
        background-color: orange;
        opacity: 1;
        border: none;
    }
</style>

<body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <?php
    require_once '../connect.php';
    $loi = array();
    $loi1 = array();
    if (isset($_POST['submit'])) {
        $user = $_POST['username'];
        $pass = $_POST['password'];
        if ($user == '') {
            $loi['username'] = 'Ban chua nhap username!!';
        }
        if ($pass == '') {
            $loi1['password'] = 'Ban chua nhap password!!';
        }
        if ($user && $pass != '') {
            $sql = "insert into user(username,password) values ('$user','$pass')";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $e = 'them du lieu thanh cong';
            header("location:list_user.php?me=" . $e);
        }
    }
    ?>

    <div class="wrapper">
        <div class="box">
            <h1 class="tieude">THÊM MỚI USER</h1>
            <form action="" method="post">
                <p>
                    <input type="text" name="username" id="user" placeholder="Nhập Username">
                <div class="loi"> <?= isset($loi['username']) ? $loi['username'] : '' ?></div>
                </p>
                <p>
                    <input type="password" name="password" id="pass" placeholder="Nhập Password">
                <div class='loi'> <?= isset($loi1['password']) ? $loi1['password'] : '' ?></div>
                </p>
                <p>
                    <button type="submit" name="submit">Thêm mới</button>
                </p>
            </form>

        </div>

    </div>
</body>

</html>