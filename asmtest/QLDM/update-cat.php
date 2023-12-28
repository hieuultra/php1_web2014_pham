<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Them san pham</title>
    <link rel="stylesheet" href="../QLsanPham/add-updatePro.css">
</head>
<style>
    button:hover {
        background-color: orange;
        cursor: pointer;
    }
</style>

<body>
    <?php
    require_once '../connect.php';
    $loi = array();
    if (isset($_POST['submit'])) {
        $id = $_POST['catid'];
        $catname = $_POST['catname'];
        if ($catname == '') {
            $loi['catname'] = 'Bạn chưa nhập tên danh muc';
        }
        if ($catname != '') {
            $query = "update categories set  catname ='$catname' where catid=$id";
            $stmt = $conn->prepare($query);
            $stmt->execute();
            $e = 'cap nhap du lieu thanh cong';
            header("location:list-cat.php?me=" . $e);
        }
    }
    $id = $_GET['catid'];
    $sql = "select * from categories where catid=$id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $cat = $stmt->fetch();
    ?>
    <div class="wrapper">
        <div class="box">
            <h1 class="tieude">SỬA DANH MUC </h1>
            <form action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="catid" value="<?= $cat['catid'] ?>">
                <p>
                    Tên Danh Mục <input type="text" name="catname" id="ten" value="<?= $cat['catname'] ?>">
                <div class="loi"><?= (isset($loi['catname'])) ? $loi['catname'] : '' ?></div>
                </p>
                <p>
                    <button type="submit" name="submit">Sửa danh muc</button>
                </p>
            </form>
        </div>

    </div>
</body>

</html>