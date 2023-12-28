<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio</title>
</head>

<body>
    <h1>Post du lieu</h1>
    <form action="" method="post">
        gioi tinh: <input type="radio" name="radGT" value="nam" checked="checked">Nam
        <input type="radio" name="radGT" value="nu">Nu
        <br>
        so thich: <br>
        <input type="checkbox" name="cbxanchoi" value="an choi"> an choi <br>
        <input type="checkbox" name="cbxnhaymua" value="nhay mua"> nhay mua <br>
        <input type="checkbox" name="cbxtieutien" value="tieu tien"> tieu tien <br>
        <input type="submit" name="submit" id="submit" value="submit">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $gt = $_POST['radGT'];
        //dua du lieu post vao mang php
        // $st = array(); //khai bao mang
        // if (isset($_POST['cbxanchoi'])) {
        //     array_push($st, $_POST['cbxanchoi']); //them phan tu vao mang
        // }
        // if (isset($_POST['cbxnhaymua'])) {
        //     array_push($st, $_POST['cbxnhaymua']);
        // }
        // if (isset($_POST['cbxtieutien'])) {
        //     array_push($st, $_POST['cbxtieutien']);
        // }
        echo "gt la:" . $gt . "<br>";
        // echo "st la:" . $st . "<br>";
        // print_r($st);//in du lieu ra tu mang
        // foreach ($st as $key => $value) {//in du lieu ra tu mang
        //     echo $key . "--" . $value;
        // }

        //lay du lieu tu checkbox
        $st = "";
        if (isset($_POST['cbxanchoi'])) {
            $st .= $_POST['cbxanchoi'] . "-";
        }
        if (isset($_POST['cbxnhaymua'])) {
            $st .= $_POST['cbxnhaymua'] . "-";
        }
        if (isset($_POST['cbxtieutien'])) {
            $st .= $_POST['cbxtieutien'] . "-";
        }
        echo "st la:" . $st . "<br>";
    }
    ?>
</body>

</html>