<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>THUE THU NHAP CA NHAN</h1>

    <form action="" method="post">
        <label for="">Nhap thu nhap ca nhan cua ban:</label>
        <input type="number" name="s1" id="">
        <input type="submit" value="SUBMIT" name="btn">
    </form>
    <?php
    $thue = 0;
    if (isset($_POST['btn'])) {
        $a = $_POST['s1'];
        if ($a >= 20000000 && $a < 30000000) {
            $thue = $a * 0.1;
            echo "thue phai nop la:" . $thue . " dong";
        } else if ($a >= 30000000 && $a < 40000000) {
            $thue = $a * 0.125;
            echo "thue phai nop la:" . $thue . " dong";
        } else if ($a >= 40000000 && $a < 50000000) {
            $thue = $a * 0.15;
            echo "thue phai nop la:" . $thue . " dong";
        } else if ($a >= 50000000) {
            $thue = $a * 0.2;
            echo "thue phai nop la:" . $thue . " dong";
        } else {
            $thue = 0;
            echo "thue phai nop la:" . $thue . " dong";
        }
    }

    ?>
</body>

</html>