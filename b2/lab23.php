<?php
$products = [
    [
        'id' => 1,
        'product_name' => 'Máy giặt LG 320G',
        'image' => 'productDemo/image/mg.jpg',
        'price' => 12000000,
        'quantity' => '1000'
    ],
    [
        'id' => 2,
        'product_name' => 'Iphone 14 Pro Max 128GB',
        'image' => 'productDemo/image/ip.jpg',
        'price' => 26900000,
        'quantity' => '700'
    ],
    [
        'id' => 3,
        'product_name' => 'Samsung Galaxy S23 256GB',
        'image' => 'productDemo/image/ss.jpg',
        'price' => 21990000,
        'quantity' => '1600'
    ],
    [
        'id' => 4,
        'product_name' => 'MacBook Air 13-inch M1 (8GB/256GB)',
        'image' => 'productDemo/image/mb.jpg',
        'price' => 19000000,
        'quantity' => '7000'
    ],
    [
        'id' => 5,
        'product_name' => 'MacBook Air M2 13.6" 2022 - 512GB',
        'image' => 'productDemo/image/a.jpg',
        'price' => 35990000,
        'quantity' => '100'
    ]
]
?>
<!DOCTYPE html>
<html>

<head>
    <title>Danh sách sản phẩm</title>
    <style>
        table {
            border-collapse: collapse;
            border: 1px solid white;
        }

        th {
            background-color: black;
            color: white;
            padding: 30px;
            border: 1px solid white;
        }

        img {
            width: 50%;
        }
    </style>
</head>

<body>
    <h1>Danh sách sản phẩm</h1>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>image</th>
                <th>price</th>
                <th>quantity</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $i) : ?>
                <tr>
                    <td><?php echo $i['id'] ?></td>
                    <td><?php echo $i['product_name'] ?></td>
                    <td>
                        <img src="<?php echo $i['image'] ?>"  alt="">
                    </td>
                    <td><?php echo $i['price'] ?></td>
                    <td><?php echo $i['quantity'] ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

</body>

</html>