<!doctype html>
<html lang="en">

<head>
    <title>cap nhap User</title>
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
    require_once 'conect.php';
    $loi1 = array();
    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $user = $_POST['username'];
        $pass = $_POST['password'];
        if ($pass == '') {
            $loi1['password'] = 'Ban chua nhap password!!';
        }
        if ( $pass != '') {
            $sql = "update users set password= '$pass' where id=$id";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $e = 'sua du lieu thanh cong';
            header("location:list-user.php?me=" . $e);
        }
    }
    $id = $_GET['id'];
    $sql = "select * from users where id=$id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $u = $stmt->fetch();
    ?>

    <div class="wrapper">
        <div class="box">
            <h1 class="tieude">SỬA PASSWORD</h1>
            <form action="" method="post">
                <input type="hidden" name="id" value="<?= $u['id'] ?>">
                <p>
                    <input type="text" name="username" id="user" value="<?= $u['username'] ?>">
                </p>
                <p>
                    <input type="password" name="password" id="pass" value="<?= $u['password'] ?>">
                <div class='loi'> <?= isset($loi1['password']) ? $loi1['password'] : '' ?></div>
                </p>
                <p>
                    <button type="submit" name="submit">Sua pass</button>
                </p>
            </form>

        </div>

    </div>
</body>

</html>