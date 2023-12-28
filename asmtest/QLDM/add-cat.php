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
        $catname = $_POST['catname'];
        if ($catname == '') {
            $loi['catname'] = 'Bạn chưa nhập tên danh muc';
        }
        if ($catname != '') {
            $query = "insert into categories (catname) 
                values('$catname')";
            $stmt = $conn->prepare($query);
            $stmt->execute();
            $e = 'them du lieu thanh cong';
            header("location:list-cat.php?me=" . $e);
        }
    }
    ?>
    <div class="wrapper">
        <div class="box">
            <h1 class="tieude">THÊM MỚI DANH MUC </h1>
            <form action="" method="post" enctype="multipart/form-data">
                <p>
                    Tên Danh Mục <input type="text" name="catname" id="ten" placeholder="Nhập tên danh muc">
                <div class="loi"><?= (isset($loi['catname'])) ? $loi['catname'] : '' ?></div>
                </p>
                <p>
                    <button type="submit" name="submit">Thêm mới</button>
                </p>
            </form>
        </div>

    </div>
</body>

</html>