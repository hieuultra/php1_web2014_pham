<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add-air</title>
    <link rel="stylesheet" href="../asmtest/QLsanPham/add-updatePro.css">
</head>
<style>
    .loi {
        color: red;
    }

    form {
        width: 60%;
    }

    input {
        width: 500px;
        height: 30px;
        padding: 2px;
        margin: 10px auto;
    }

    h1 {
        text-align: center;
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
        $fln = $_POST['fln'];
        $file = $_FILES['image'];
        $img = $file['name'];
        move_uploaded_file($file['tmp_name'], "img/" . $img);

        $hk = $_POST['hk'];
        $mt = $_POST['mt'];
        $ai = $_POST['airline_id'];
        if ($fln == "") {
            $loi['fln'] = "ban chua nhap ten";
        }
        if ($img == "") {
            $loi1['image'] = "ban chua chon anh";
        } else if ($file['size'] >= 1000000) {  // 1000000 BYTE = 1MB 
            $loi1['image'] = 'Max size 1MB';
        } else {
            $imgs = ['png', 'jpeg'];
            //lay duoi mo rong cua file
            $ext = pathinfo($file['name']);
            if (!in_array($ext, $imgs)) {
                $loi1['image'] = 'file cua ban ko phai la anh';
            }
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
            $sql = "insert into flights (flight_number, image, total_passengers, description, airline_id) 
            values('$fln','$img','$hk','$mt','$ai') ";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            setcookie("mes", "them data  thanh cong", time() + 1);
            header("location:list-air.php");
        }
    }
    ?>

    <div class="wrapper">
        <h1>them moi chuyen bay</h1>
        <div class="box">
            <form action="" method="post" enctype="multipart/form-data">
                <p>
                    <input type="text" name="fln" id="" placeholder="nhap so chuyen bay">
                <div class="loi"><?= $loi['fln'] ?? '' ?></div>
                </p>
                <p>
                    <input type="file" name="image" id="">
                <div class="loi"><?= $loi1['image'] ?? '' ?></div>
                </p>
                <p>
                    <input type="text" name="hk" id="" placeholder="nhap tong so hanh khach">
                <div class="loi"><?= $loi2['hk'] ?? '' ?></div>
                </p>
                <p>
                    <textarea name="mt" id="" cols="30" rows="10" placeholder="nhap mo ta"></textarea>
                <div class="loi"><?= $loi3['mt'] ?? '' ?></div>
                </p>
                <p>
                    <select name="airline_id" id="">
                        <?php foreach ($air as $a) : ?>
                            <option value="<?= $a['airline_id'] ?>">
                                <?= $a['airline_name'] ?>
                            </option>
                        <?php endforeach ?>
                    </select>
                </p>
                <button type="submit" name="btn">them moi</button>

            </form>
        </div>
    </div>

</body>

</html>