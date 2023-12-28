<?php
const status = [
    0 => "Hết hàng",
    1 => "Còn hàng"
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Them san pham</title>
    <link rel="stylesheet" href="add-updatePro.css">
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
    $loi1 = array();
    $loi2 = array();
    $loi3 = array();
    if (isset($_POST['submit'])) {
        $proname = $_POST['productName'];
        $quantity = $_POST['quantity'];
        $price = $_POST['price'];

        $file = $_FILES['image'];
        $img = $file['name'];
        move_uploaded_file($file['tmp_name'], "img/" . $img);

        $prosta = $_POST['productStatus'];

        if ($proname == '') {
            $loi['productName'] = 'Bạn chưa nhập tên sản phẩm';
        }

        if ($quantity == '') {
            $loi1['quantity'] = 'Bạn chưa nhập số lượng sản phẩm';
        } else if ($quantity < 0) {
            $loi1['quantity'] = 'Bạn đang  nhập số lượng sản phẩm là số nhỏ hơn 0';
        }

        if ($price == '') {
            $loi2['price'] = 'Bạn chưa nhập giá sản phẩm';
        } else if ($price < 0) {
            $loi2['price'] = 'Bạn đang nhập giá sản phẩm là số nhỏ hơn 0';
        }

        if ($img == '') {
            $loi3['image'] = 'Bạn chưa nhập ảnh sản phẩm';
        }
        if ($proname && $quantity && $price && $img != '') {
            $query = "insert into products (productName,quantity,price,image,productStatus) 
                values('$proname','$quantity','$price','$img','$prosta')";
            $stmt = $conn->prepare($query);
            $stmt->execute();
            $me = 'them du lieu thanh cong';
            header("location:list_product.php?mes=" . $me);
        }
    }
    ?>
    <div class="wrapper">
        <div class="box">
            <h1 class="tieude">THÊM MỚI SẢN PHẨM</h1>
            <form action="" method="post" enctype="multipart/form-data">
                <p>
                    Tên sản phẩm<input type="text" name="productName" id="ten" placeholder="Nhập tên sản phẩm">
                <div class="loi"><?= (isset($loi['productName'])) ? $loi['productName'] : '' ?></div>
                </p>
                <p>
                    Số lượng<input type="text" name="quantity" id="sl" placeholder="Nhập số lượng">
                <div class="loi"><?= (isset($loi1['quantity'])) ? $loi1['quantity'] : '' ?></div>
                </p>
                <p>
                    Giá sản phẩm<input type="text" name="price" id="gia" placeholder="Nhâp giá sản phẩm">
                <div class="loi"><?= (isset($loi2['price'])) ? $loi2['price'] : '' ?></div>
                </p>
                <p>
                    Ảnh sản phẩm<input type="file" name="image" id="file">
                <div class="loi"><?= (isset($loi3['image'])) ? $loi3['image'] : '' ?></div>
                </p>
                <p>
                    Tình trạng hàng <select name="productStatus" id="loai">
                        <?php foreach (status as $key => $value) : ?>
                            <option value="<?= $key ?>">
                                <?= $value ?>
                            </option>
                        <?php endforeach ?>
                    </select>
                </p>
                <p>
                    <button type="submit" name="submit">Thêm mới</button>
                </p>
            </form>
        </div>

    </div>
</body>

</html>