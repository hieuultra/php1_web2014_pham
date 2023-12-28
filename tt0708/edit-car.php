<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit-car</title>
</head>
<style>
    .loi {
        color: red;
    }
</style>

<body>
    <?php
    require_once 'conect.php';
    $loi = array();
    $loi1 = array();
    $loi2 = array();
    $loi3 = array();
    $loi4 = array();

    if (isset($_POST['btn'])) {
        $id = $_POST['carid'];
        $cn = $_POST['cn'];
        $file = $_FILES['ci'];
        if ($file['size'] > 0) {
            $img = $file['name'];
            move_uploaded_file($file['tmp_name'], "img/" . $img);
        } else {
            $img = $_POST['ci'];
        }

        $cp = $_POST['cp'];
        $cq = $_POST['cq'];
        $mt = $_POST['mt'];
        if ($cn == "") {
            $loi['cn'] = "ban chua nhap ten";
        }
        if ($img == "") {
            $loi1['ci'] = "ban chua chon anh";
        }
        if ($cp == "") {
            $loi2['cp'] = "ban chua nhap gia";
        } else if ($cp < 0) {
            $loi2['cp'] = "gia phai lon hon 0";
        }
        if ($cq == "") {
            $loi3['cq'] = "ban chua nhap so luong";
        } elseif ($cq < 0) {
            $loi3['cq'] = "Bạn đang nhập số lượng sản phẩm < 0.<pre> Vui lòng mời bạn nhập lại!";
        }
        if ($mt == "") {
            $loi4['mt'] = "ban chua nhap mo ta";
        }
        if ($cn && $img && $cp && $cq && $mt != '') {
            $sql = "update car  set carname='$cn',carimg='$img',carprice='$cp',carquantity='$cq',description='$mt' where carid='$id'";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $e = "update data thanh cong";
            header("location:list-car.php?mes=" . $e);
        }
    }
    $id = $_GET['carid'];
    $sql = "select * from car where carid='$id'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $cars = $stmt->fetch();


    ?>
    <h2>them moi san pham</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <p>
            <input type="hidden" name="carid" value="<?= $cars['carid'] ?>">
        </p>
        <p> <input type="text" name="cn" id="" value="<?= $cars['carname'] ?>">
        <div class="loi"><?= $loi['cn'] ?? '' ?></div>
        </p>
        <p> <input type="file" name="ci" id="">
        <div class="loi"><?= $loi1['ci'] ?? '' ?></div>
        </p>
        <input type="hidden" name="ci" value="<?= $cars['carimg'] ?>">

        <p> <input type="text" name="cp" id="" value="<?= $cars['carprice'] ?>">
        <div class="loi"><?= $loi2['cp'] ?? '' ?></div>
        </p>

        <p> <input type="text" name="cq" id="" value="<?= $cars['carquantity'] ?>">
        <div class="loi"><?= $loi3['cq'] ?? '' ?></div>
        </p>

        <p> <textarea name="mt" id="" cols="30" rows="10"><?= $cars['description'] ?></textarea>
        <div class="loi"><?= $loi4['mt'] ?? '' ?></div>
        </p>
        <p><button type="submit" name="btn">update</button></p>


    </form>
</body>

</html>