<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add-car</title>
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
        $cn = $_POST['cn'];
        $file = $_FILES['ci'];
        $img = $file['name'];
        move_uploaded_file($file['tmp_name'], "img/" . $img);
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
            $sql = "insert into car(carname,carimg,carprice,carquantity,description) values('$cn','$img','$cp','$cq','$mt')";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $mee = "them data thanh cong";
            header("location:list-car.php?mes=" . $mee);
        }
    }


    ?>
    <h2>them moi san pham</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <p> <input type="text" name="cn" id="" placeholder="nhap ten">
        <div class="loi"><?= $loi['cn'] ?? '' ?></div>
        </p>
        <p> <input type="file" name="ci" id="">
        <div class="loi"><?= $loi1['ci'] ?? '' ?></div>
        </p>

        <p> <input type="text" name="cp" id="" placeholder="nhap gia">
        <div class="loi"><?= $loi2['cp'] ?? '' ?></div>
        </p>

        <p> <input type="text" name="cq" id="" placeholder="nhap so luong">
        <div class="loi"><?= $loi3['cq'] ?? '' ?></div>
        </p>

        <p> <textarea name="mt" id="" cols="30" rows="10"></textarea>
        <div class="loi"><?= $loi4['mt'] ?? '' ?></div>
        </p>
        <p><button type="submit" name="btn">them moi</button></p>


    </form>
</body>

</html>