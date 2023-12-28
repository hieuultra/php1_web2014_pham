<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //xu ly form
    //du lieu truyen len server thong qua 2 pt:
    //get 
    //post


    //1. pt get
    //du lieu dc gui len server voi pt get = cach bo sung cac tham so sau URL
    //server se nhan url sau do phan tich va tra lai ket qua
    //$_GET
    //2. lay du lieu: $_GET la bien toan cuc luu tru tat ca du lieu tu client gui len server
    //$_GET la 1 mang dinh danh
    //luu y: trc khi lay du lieu thi phai kiem tra xem no co ton tai hay ko
    //de kiem tra du lieu ds ham isset(du lieu can kiem tra)

    //3. pt post
    //la hinh thuc gui du lieu tu client len server giong get
    // du lieu gui di se dc an
    // echo "<pre>";
    // var_dump($_GET);
    // if (isset($_GET['fullname'])) {
    //     echo $_GET['fullname'];
    // }
    // echo "<br>";
    // if (isset($_GET['quantity'])) {
    //     echo $_GET['quantity'];
    // }

    //tk: get luon luon nhanh hon post
    //voi post: du lieu luon gui len server de xu ly, sau do ms tra ve
    // voi get: browser se kiem tra trong cache co chua, neu co thi tra ve luon, ko can gui len server nx
    //nen sd get khi muon seo web
    // neu du lieu bao mat nen sd post
    //khi sd cac cau lenh trong database:
    //neu la select thi sd get
    //neu la cac cau lenh tac dong va thay doi du lieu thi sd post
    echo "<pre>";
    var_dump($_POST);
    ?>
    <!-- <form action="" method="get">
        <input type="text" name="fullname" id="fullname" placeholder="name">
        <input type="text" name="quantity" id="quantity" placeholder="quantity">
        <input type="submit" value="them" name="btn">
    </form> -->

    <form action="info.php" method="post">
        <input type="text" name="fullname" id="fullname" placeholder="name">
        <input type="text" name="quantity" id="quantity" placeholder="quantity">
        <input type="submit" value="them" name="btn">
    </form>
</body>

</html>