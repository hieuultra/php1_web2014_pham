<?php
const status = [
    0 => "het hang",
    1 => "con hang"
];
if (isset($_POST['btn'])) {
    // echo "<pre>";
    // var_dump($_FILES);
    $productName = $_POST['product-name'];
    $prdqtt = $_POST['product-quantity'];
    $prdpr = $_POST['product-price'];
    $imageFolder = "image/" . basename($_FILES['product-image']['name']); //duong dan den thu muc chua anh
    $productImage = $_FILES['product-image']['name']; //lay anh
    $prdstt = $_POST['product-status'];

    $conn = new PDO("mysql:host=127.0.0.1;dbname=asm18314;charset=utf8", "root", "");
    $querry = "insert into products (productName,productQuantity,
    productPrice,productImage,productStatus) 
    value (' $productName',' $prdqtt','$prdpr',' $productImage','$prdstt ')";
    $stmt = $conn->prepare($querry);
    $stmt->execute();

    header("location:listProduct.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    input {
        display: block;
    }
</style>

<body>
    <!-- "multipart/form-data" được sử dụng khi biểu mẫu bao gồm các trường
 tệp tin (file input), cho phép người dùng tải lên tệp tin từ máy tính của họ. -->
    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="product-name" id="" placeholder="enter product name">
        <input type="text" name="product-quantity" id="" placeholder="enter product quantity">
        <input type="text" name="product-price" id="" placeholder="enter product price">
        <input type="file" name="product-image" id="">
        <select name="product-status" id="">
            <?php foreach (status as $key => $value) : ?>
                <option value="<?php echo $key ?>"><?php echo $value ?></option>
            <?php endforeach ?>
        </select>
        <input type="submit" value="them" name="btn">
    </form>
</body>

</html>