<?php
require_once 'conection.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $proName = $_POST['productName'];
    $price = $_POST['price'];
    $mota = $_POST['description'];
    $quantity = $_POST['quantity'];
    $cat_id = $_POST['cat_id'];
    $id = $_POST['id'];
    //lam viec voi file
    $file = $_FILES['image'];
    // echo "<pre>";
    // var_dump($file);
    //lay ten anh
    if ($file['size'] > 0) {
        $image = $file['name'];
        //upload anh
        move_uploaded_file($file['tmp_name'], "image/" . $image);
    } else {
        $image = $_POST['image'];
    }

    //sql insert
    $sql = "update product set productName = '$proName',image='$image',
    price='$price',description='$mota',quantity='$quantity',cat_id='$cat_id' where id='$id'";

    //chuan bi
    $stmt = $conn->prepare($sql);
    $stmt->execute(); //thuc thi

    $message = 'cap nhap du lieu thanh cong';
}
// cau lenh sql
$sql = 'select * from category ';
//chuan bi
$stmt = $conn->prepare($sql);
//thuc thi
$stmt->execute();
//lay du lieu
$cat = $stmt->fetchAll(PDO::FETCH_ASSOC);
//FETCH_ASSOC: DUA CHO TA 1 MANG CO KEY VA VALUE
// echo "<pre>";
// var_dump($cat);

//lay san pham can sua
$productId = $_GET['id'];
//cau lenh lay ra 1 san pham
$sql = "select * from product where id=$productId";
$stmt = $conn->prepare($sql);
$stmt->execute();
$product = $stmt->fetch();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add product</title>
</head>

<body>
    <div style="color: blue;">
        <?= $message ?? '' ?>
    </div>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" id="" value="<?= $product['id'] ?>">
        <input type="text" name="productName" placeholder="ten san pham" value="<?= $product['productName'] ?>"><br>
        <input type="file" name="image" id=""><br>
        <!-- luu lai thong tin anh cu neu nguoi dung ko thay anh -->
        <input type="hidden" name="image" id="" value="<?= $product['image'] ?>">
        <br>
        <input type="number" name="price" placeholder="gia san pham" value="<?= $product['price'] ?>"><br>
        <textarea name="description" id="" cols="90" rows="6" placeholder="mo ta"><?= $product['description'] ?></textarea><br>
        <input type="number" name="quantity" id="" placeholder="so luong" value="<?= $product['quantity'] ?>"><br>
        <select name="cat_id" id="">
            <?php foreach ($cat as $c) : ?>
                <option value="<?= $c['id'] ?>" <?= ($c['id'] == $product['cat_id']) ?
                                                    'selected' : '' ?>>
                    <?= $c['name'] ?>
                </option>
            <?php endforeach ?>
        </select>
        <br>
        <button type="submit">Cap nhap</button>
        <a href="product.php">danh sach</a>
    </form>
</body>

</html>