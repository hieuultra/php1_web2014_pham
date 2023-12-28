<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit-air</title>
</head>
<style>
    .loi {
        color: red;
    }

    form {
        width: 60%;
    }
</style>

<body>
    <?php
    require_once 'conect.php';
    $sql = "select * from airlines";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $air = $stmt->fetchAll();

    $loi = array();
    $loi1 = array();
    $loi2 = array();
    $loi3 = array();

    if (isset($_POST['btn'])) {
        $id = $_POST['flight_id'];
        $fln = $_POST['fln'];
        $file = $_FILES['image'];
        if ($file['size'] > 0) {
            $img = $file['name'];
        } else if ($file['size'] >= 1000000) {  // 1000000 BYTE = 1MB 
            $loi1['image'] = 'Max size 1MB';
        } else if ($file['size'] == 0) {
            $img = $_POST['image'];
        } else {
            $imgs = ['png', 'jpeg'];
            //lay duoi mo rong cua file
            $ext = pathinfo($file['name']);
            if (!in_array($ext, $imgs)) {
                $loi1['image'] = 'file cua ban ko phai la anh';
            }
        }
        if (!isset($loi1['image'])) {
            move_uploaded_file($file['tmp_name'], "img/" . $img);
        }

        $hk = $_POST['hk'];
        $mt = $_POST['mt'];
        $ai = $_POST['airline_id'];
        if ($fln == "") {
            $loi['fln'] = "ban chua nhap ten";
        }
        if ($img == "") {
            $loi1['image'] = "ban chua chon anh";
        }


        if ($hk == "") {
            $loi2['hk'] = "ban chua nhap so hanh khach";
        } else if ($hk < 0) {
            $loi2['hk'] = "hanh khach phai lon hon 0";
        }
        if ($mt == "") {
            $loi3['mt'] = "ban chua nhap mo ta";
        }
        if ($fln && $img && $hk && $mt && $ai != '') {
            $sql = "update flights set flight_number='$fln', image='$img', total_passengers='$hk',
             description='$mt', airline_id='$ai' where flight_id='$id' ";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            setcookie("mes", "sua data  thanh cong", time() + 1);
            header("location:list-air.php");
        }
    }
    $id = $_GET['flight_id'];
    $sql = "select * from flights where flight_id ='$id'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $fl = $stmt->fetch();
    ?>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="flight_id" value="<?= $fl['flight_id'] ?>">
        <p>
            <input type="text" name="fln" id="" value="<?= $fl['flight_number'] ?>">
        <div class="loi"><?= $loi['fln'] ?? '' ?></div>
        </p>
        <p>
            <input type="file" name="image" id="">
        <div class="loi"><?= $loi1['image'] ?? '' ?></div>
        </p>
        <input type="hidden" name="image" value="<?= $fl['image'] ?>">
        <p>
        <p>
            <img src="img/<?= $fl['image'] ?>" width="120" alt="">
        </p>
        <input type="text" name="hk" id="" value="<?= $fl['total_passengers'] ?>">
        <div class="loi"><?= $loi2['hk'] ?? '' ?></div>
        </p>
        <p>
            <textarea name="mt" id="" cols="30" rows="10"><?= $fl['description'] ?></textarea>
        <div class="loi"><?= $loi3['mt'] ?? '' ?></div>
        </p>
        <p>
            <select name="airline_id" id="">
                <?php foreach ($air as $a) : ?>
                    <option value="<?= $a['airline_id'] ?>" <?= ($a['airline_id'] == $fl['airline_id']) ? 'selected' : '' ?>>
                        <?= $a['airline_name'] ?>
                    </option>
                <?php endforeach ?>
            </select>
        </p>
        <button type="submit" name="btn">edit</button>

    </form>


</body>

</html>