<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // echo "<pre>";
    // var_dump($_FILES);
    $file = $_FILES['fileupload'];

    if ($file['size'] == 0) {
        $errs = "ban chua chon file";
    } else if ($file['size'] >= 1000000) {  // 1000000 BYTE = 1MB 
        $errs = 'Max size 1MB';
    } else {
        //upload anh
        $imgs = ['jpg', 'jpeg', 'png'];
        //lay duoi mo rong cua file
        $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
        //kiem tra
        if (!in_array($ext, $imgs)) {
            $errs = "File cua ban ko phai la anh";
        }
    }
    //upload
    if (!isset($errs)) {
        move_uploaded_file($file['tmp_name'], 'upload/' . $file['name']);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload file</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="fileupload" id="">
        <span type="color:red">
            <?php if (isset($errs)) : ?>
                <?= "<br>" .   $errs   ?>
            <?php endif ?>
        </span>
        <br>
        <button type="submit">upload</button>
    </form>

</body>

</html>