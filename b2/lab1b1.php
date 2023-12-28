<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>chuong trinh dang ky hoc online</h1>
    <form action="" method="post">
        <label for="">ho ten</label>
        <input type="text" name="ten" id="ten">
        <br>
        <br>
        <label for="">email</label>
        <input type="text" name="email" id="email">
        <br>
        <br>
        <label for="">sdt</label>
        <input type="number" name="sdt" id="sdt">
        <br>
        <br>
        <label for="">dia chi</label>
        <input type="text" name="dc" id="dc">
        <br>
        <br>
        <label for="">khoa hoc</label>
        <select name="kh" id="kh">
            <option value="kh1" name="kh1">php</option>
            <option value="kh2" name="kh2">java</option>
            <option value="kh3" name="kh3">c</option>
        </select>
        <br><br>
        <input type="submit" name="submit" value="submit">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $ht = $_POST['ten'];
        echo "<br>ho ten la:" . $ht;

        $email = $_POST['email'];
        echo "<br>email la:" . $email;

        $sdt = $_POST['sdt'];
        echo "<br>sdt la:" . $sdt;

        $dc = $_POST['dc'];
        echo "<br>dia chi la:" . $dc;

        $kh = $_POST['kh'];
        switch ($kh) {
            case "kh1":
                echo "<br>ban da chon khoa hoc php";
                break;
            case "kh2":
                echo "<br>ban da chon khoa hoc java";
                break;
            case "kh3":
                echo "<br>ban da chon khoa hoc c";
                break;
        }
    }
    ?>
</body>

</html>