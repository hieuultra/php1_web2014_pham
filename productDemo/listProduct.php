<?php
$conn = new PDO("mysql:host=127.0.0.1;dbname=asm18314;charset=utf8", "root", "");
$query = "select * from products";
$stmt = $conn->prepare($query);
$stmt->execute();
$product = $stmt->fetchAll(); //lay ra tat ca du lieu trong table products
//  echo "<pre>";
// var_dump($product);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table {
        border-collapse: collapse;
        border: 1px solid white;
    }

    th {
        background-color: black;
        color: white;
        padding: 10px;
        border: 1px solid white;
    }

    img {
        width: 80%;
    }
</style>

<body>
    <table>
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Product Image</th>
                <th>Product Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($product as $item) : ?>
                <tr>
                    <td><?php echo $item['productName'] ?></td>
                    <td><img src="image/<?php echo $item['productImage'] ?>"></td>
                    <td><?php echo $item['productStatus'] == 1 ? "con hang" : "het hang" ?> </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

</body>

</html>