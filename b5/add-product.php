<?php
require_once 'conection.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $proName = $_POST['productName'];
    $price = $_POST['price'];
    $mota = $_POST['description'];
    $quantity = $_POST['quantity'];
    $cat_id = $_POST['cat_id'];
    //lam viec voi file
    $file = $_FILES['image'];
    // echo "<pre>";
    // var_dump($file);
    //lay ten anh
    $image = $file['name'];
    //upload anh
    move_uploaded_file($file['tmp_name'], "image/" . $image);

    //sql insert
    $sql = "insert into product (productName,image,price,description,quantity,cat_id)
 values('$proName','$image','$price','$mota','$quantity','$cat_id')";

    //chuan bi
    $stmt = $conn->prepare($sql);
    $stmt->execute(); //thuc thi
}
// cau lenh sql
$sql = 'select * from category';
//chuan bi
$stmt = $conn->prepare($sql);
//thuc thi
$stmt->execute();
//lay du lieu
$cat = $stmt->fetchAll(PDO::FETCH_ASSOC);
//FETCH_ASSOC: DUA CHO TA 1 MANG CO KEY VA VALUE
// echo "<pre>";
// var_dump($cat);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add product</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="productName" placeholder="them san pham"><br>
        <input type="file" name="image" id=""><br>
        <input type="number" name="price" placeholder="gia san pham"><br>
        <textarea name="description" id="" cols="90" rows="6" placeholder="mo ta"></textarea><br>
        <input type="number" name="quantity" id="" placeholder="so luong"><br>
        <select name="cat_id" id="">
            <?php foreach ($cat as $c) : ?>
                <option value="<?= $c['id'] ?>">
                    <?= $c['name'] ?>
                </option>
            <?php endforeach ?>
        </select>
        <br>
        <button type="submit">Them san pham</button>
      
    </form>
</body>

</html>