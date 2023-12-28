<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tinh giai thua</title>
</head>

<body>
    <form action="" method="post">
        Nhap vao n:<input type="text" name="txtSo" value="">
        <input type="submit" value="submit" name="btnSm">
    </form>
    <?php
    function giaithua($n)
    {
        if ($n == 1) {
            return 1;
        } else {
            return $n * giaithua($n - 1);
        }
    }
    if (isset($_POST['btnSm'])) {
        $n = $_POST['txtSo'];
        $kq = giaithua($n);
        echo "giai thua cua " . $n . " la:" . $kq;
    }
    ?>
</body>

</html>