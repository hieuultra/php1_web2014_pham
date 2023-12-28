<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $name = $_POST['fullname'];
    $gia = $_POST['quantity'];
    ?>
    <div>thong tin</div><br>
    <div>ten san pham <?php echo  $name ?></div>
    <div>gia <?php echo $gia ?></div>
</body>

</html>