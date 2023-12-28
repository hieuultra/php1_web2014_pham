<?php
$product = [
    [
        "id" => "1",
        "name" => "ip14",
        "price" => 899,
        "image" => "productDemo/image/221101.jpg"
    ],
    [
        "id" => "2",
        "name" => "ip11",
        "price" => 999,
        "image" => "productDemo/image/221101.jpg"
    ],
    [
        "id" => "3",
        "name" => "ip12",
        "price" => 799,
        "image" => "productDemo/image/a.jpg"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>image</th>
            <th>price</th>
        </tr>

        <?php foreach ($product as $i) : ?>
            <tr>
                <td><?php echo $i['id'] ?></td>
                <td><?php echo $i['name'] ?></td>
                <td>
                    <img src="<?php echo $i['image'] ?>" width="120" alt="">
                </td>
                <td><?php echo $i['price'] ?></td>
            </tr>
        <?php endforeach ?>
    </table>

    <?php
    //mang
    // mang thong thuong: key=>value
    //cac key dc tu dong gan khi khoi tao mang
    // $product = array("iphone12 ", "samsung galaxy", " xiao my m11");
    // echo "<pre>";
    // var_dump($product);
    // echo "<br>";
    // foreach ($product as $item) {
    //     echo '<pre>';
    //     echo $item;
    // }
    // echo '<pre>';
    // echo $product[2];
    // echo '<pre>';
    // echo "hien thi phan tu trong mang su dung for";
    // for ($index = 0; $index < count($product); $index++) {
    //     echo '<pre>';
    //     echo $product[$index];
    // }

    //mang dinh danh
    // echo '<pre>';
    // $newproduct = array("apple" => "iphone12", "samsung" => "ss galxy", "xiaomy" => "xiaomy123");
    // var_dump($newproduct);
    // echo $newproduct["apple"];

    // foreach ($newproduct as $key => $value) {
    //     echo "<pre>";
    //     echo $key . '=>' . $value;
    // }

    //mot so ham xu ly mang

    //them phan tu vao dau mang
    //array_unshift(ten mang,gia tri1, gia tri2, ...)
    // $num = array(1, 2, 3, 4, 5);
    // array_unshift($num, 100);
    // echo "<pre>";
    //var_dump($num);

    //them vao cuoi mang
    //array_push(ten mang, gt1, gt2,...)
    // echo "<pre>";
    // var_dump($num);
    // array_push($num, 55, 77);
    // echo "mang sau khi them:";
    // var_dump($num);

    //them phan tu vao vi tri bat ky
    //array_splice(ten mang, vi tri can them,so phan tu xoa di tinh tu vi tri can them,gia tri muon them)
    // $num = array(1, 2, 3, 4, 5);
    // echo "<pre>";
    // var_dump($num);
    // array_splice($num, 2, 0, 33);
    // echo "mang sau khi them:";
    // var_dump($num);

    //xoa phan tu o vi tri dau tien
    //array_shift(ten mang)
    // $num = array(1, 2, 3, 4, 5);
    // echo "<pre>";
    // var_dump($num);
    // array_shift($num);
    // echo "mang sau khi xoa:";
    // var_dump($num);

    //xoa phan tu o vi tri cuoi cung
    //array_pop(ten mang);
    // $num = array(1, 2, 3, 4, 5);
    // echo "<pre>";
    // var_dump($num);
    // array_pop($num);
    // echo "mang sau khi xoa:";
    // var_dump($num);


    //xoa phan tu o vi tri bat ky
    //unset(ten mang[key])
    // $product = array("iphone12 ", "samsung galaxy", " xiao my m11");
    // echo "<pre>";
    // echo "mang goc:";
    // var_dump($product);
    // unset($product[1]);
    // var_dump($product);

    // $newproduct = array("apple" => "iphone12", "sansung" => "ss galxy", "xiaomy" => "xiaomy123");
    // unset($newproduct["apple"]);
    // var_dump($newproduct);

    // //them 1 key va gan 1 gt moi
    // $newproduct['god'] = 'joy1';
    // var_dump($newproduct);
    ?>

</body>

</html>