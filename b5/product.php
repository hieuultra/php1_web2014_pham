<?php
session_start();
require_once "conection.php";

//kiem tra tt login
if (!isset($_SESSION['username'])) {
    header("location:login.php");
    die;
}

$sql = 'select * from product';
$stmt = $conn->prepare($sql);
$stmt->execute();

$pro = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hien thi san pham</title>
    <link rel="stylesheet" href="../asmtest/QLsanPham/list-product.css">
</head>
<style>
    .td {
        width: 1500px;
    }

    .right {
        width: 1500px;
    }

    .anh {
        width: 100px;
        height: 100px;
        margin: 10px;
    }

    .id {
        width: 200px;
        height: 100px;
        font-size: 20px;
        font-weight: bold;
    }

    .productName {
        width: 200px;
        height: 100px;
    }

    .price {
        width: 200px;
        height: 100px;
    }

    #image {
        width: 500px;
        height: 100px;
    }

    .quantity {
        width: 200px;
        height: 100px;
    }

    .cat_id {
        width: 200px;
        height: 100px;
    }

    .image {
        width: 100px;
        height: 80px;
    }
</style>

<body>
    <div style="color:green;">
        <?= $_GET['message'] ?? '' ?>
    </div>
    <div class="right">

        <div class="td">Thông tin sản phẩm</div>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Image</th>
                    <th> Price</th>
                    <th> Description</th>
                    <th> Quantity</th>
                    <th>Cat_id</th>
                    <th colspan="2">
                        <a href="add_product.php">Them</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pro as $prod) : ?>
                    <tr>
                        <td class="id"><?= $prod['id'] ?></td>
                        <td class="productName"><?= $prod['productName'] ?></td>
                        <td class="image"><img src="image/<?= $prod['image'] ?>" class="image"></td>
                        <td id="price"><?= $prod['price'] ?></td>
                        <td id="description"><?= $prod['description'] ?></td>
                        <td class="quantity"><?= $prod['quantity'] ?></td>
                        <td class="cat_id"><?= $prod['cat_id'] ?></td>
                        <td class="sua">
                            <a href=" edit_product.php?id=<?= $prod['id'] ?>">sua</a>
                        </td>
                        <td class="xoa">
                            <a onclick="return confirm('ban co chac chan xoa khong?')" href="delete_product.php?id=<?= $prod['id'] ?>">xoa</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</body>

</html>