<?php
$products = [
    [
        'id' => 1,
        'product_name' => 'Máy giặt LG 320G',
        'image' => 'mg.jpg',
        'price' => 12000000,
        'quantity' => '1000'
    ],
    [
        'id' => 2,
        'product_name' => 'Iphone 14 Pro Max 128GB',
        'image' => 'ip.jpg',
        'price' => 26900000,
        'quantity' => '700'
    ],
    [
        'id' => 3,
        'product_name' => 'Samsung Galaxy S23 256GB',
        'image' => 'ss.jpg',
        'price' => 21990000,
        'quantity' => '1600'
    ],
    [
        'id' => 4,
        'product_name' => 'MacBook Air 13-inch M1 (8GB/256GB)',
        'image' => 'images.jpg',
        'price' => 19000000,
        'quantity' => '7000'
    ],
    [
        'id' => 5,
        'product_name' => 'MacBook Air M2 13.6" 2022 - 512GB',
        'image' => 'mb1.jpg',
        'price' => 35990000,
        'quantity' => '100'
    ]
]
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Index</title>
    <link rel="stylesheet" type="text/css" href="css/common.css">
</head>

<body>
    <div class="container">
        <header><img src="images/xbanner-trang-lien-he-moi.jpg.pagespeed.ic.FQvWHe7Pcx.jpg"></header>
        <!--Menu-->
        <nav>
            <ul>
                <li><a href="index.html">Trang chủ</a></li>
                <li><a href="about.html">Giới thiệu</a></li>
                <li><a href="news.html">Tin tức</a></li>
                <li><a href="contact.html">Liên hệ</a></li>
                <li><a href="album.html">Kho ảnh</a></li>
            </ul>
        </nav>
        <!--End menu-->
        <!--List products-->
        <article>
            <?php foreach ($products as $i) : ?>
                <div class="col">
                    <div class="prodict">
                        <a href="#">
                            <?php echo $i['id'] ?>
                            <?php echo $i['product_name'] ?>
                            <img src="images/<?php echo $i['image'] ?>" alt="" width="100%" height="200px">
                            <?php echo $i['price'] ?>
                            <?php echo $i['quantity'] ?>
                        </a>
                    </div>
                </div>
            <?php endforeach ?>
        </article>
        <!--End list products-->
        <footer>
            <p>&copy; (c) Academy PolyTechnic</p>
        </footer>
    </div>
</body>

</html>