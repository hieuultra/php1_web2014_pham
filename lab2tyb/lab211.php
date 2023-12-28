<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post du lieu</title>
</head>

<body>
    <!-- form:post -->
    <form action="" method="post">
        <input type="text" name="txtHeSoa" value=""><br>
        <input type="text" name="txtHeSob" value=""><br>
        <input type="submit" name="btnNghiem" value="nghiem pt">

    </form>
    <?php
    //kiem tra xem button btnNghiem co dc click hay ko
    if (isset($_POST['btnNghiem'])) {
        $a = $_POST['txtHeSoa']; //lay ve he so a
        $b = $_POST['txtHeSob']; //lay ve he so a
        if ($a == 0) {
            if ($b == 0) {
                echo "pt vo so nghiem";
            } else {
                echo "pt vo nghiem";
            }
        } else {
            $x = -$b / $a;
            echo "pt co nghiem la: " . $x;
        }
    }
    ?>
</body>

</html>