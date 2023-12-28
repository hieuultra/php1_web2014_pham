<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>nhap thong tin sinh vien</h1>
    <form action="" method="post">
        <label for="">ho ten</label>
        <input type="text" name="ten" id="ten">
        <br>
        <br>
        <label for="">ngay sinh</label>
        <input type="text" name="ns" id="ns">
        <br>
        <br>
        <label for="">diem</label>
        <input type="number" name="diem" id="diem">
        <br><br>
        <input type="submit" value="submit" name="submit">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $ht = $_POST['ten'];
        echo "<br>ho ten:" . $ht;

        $ns = $_POST['ns'];
        echo "<br>ngay sinh:" . $ns;

        $diem = $_POST['diem'];
        echo "<br>diem:" . $diem;

        echo "<br>";

        if ($diem < 5) {
            echo "yeu";
        } else if ($diem <= 6.5) {
            echo "trung binh";
        } else if ($diem < 7.5) {
            echo "kha";
        } else if ($diem < 9) {
            echo "gioi";
        } else {
            echo "xuat sac";
        }
    }
    ?>
</body>

</html>