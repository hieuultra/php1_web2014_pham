<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add-profile</title>
</head>
<style>
    form {
        width: 100%;
        margin: 0 auto;
        border: 1px solid green;
    }
</style>

<body>
    <?php
    require_once 'conection1.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['fullname'];
        $file = $_FILES['avatar'];
        //lay ten anh
        $img = $file['name'];
        move_uploaded_file($file['tmp_name'], "image/" . $img);
        $b = $_POST['birth'];
        $e = $_POST['email'];
        $a = $_POST['address'];
        $h = $_POST['hobbie'];
        $s = $_POST['skill'];
        $ma = $_POST['major_id'];

        $sql = "insert into profile(fullname,avatar,birthday,email,address,hobbie,skill,major_id) values
        ('$name','$img','$b','$e','$a','$h','$s','$ma')";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $e = 'them du lieu thanh cong';
    }
    //lay du lieu vao option
    $sql = "select * from majors";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $major = $stmt->fetchAll();
    ?>
    <div style="color:red">
        <?= $e ?? '' ?>
    </div>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="fullname" id="" placeholder="them ten"> <br><br>
        AVATAR<input type="file" name="avatar" id=""><br><br>
        BIRTH<input type="text" name="birth" id=""><br><br>
        EMAIL<input type="text" name="email" id=""><br><br>
        ADDRESS<input type="text" name="address" id=""><br><br>
        HOBBIE<input type="text" name="hobbie" id=""><br><br>
        SKILL<input type="text" name="skill" id=""><br><br>
        <select name="major_id" id="">
            <?php foreach ($major as $m) : ?>
                <option value="<?= $m['major_id'] ?>">
                    <?= $m['major_name'] ?>
                </option>
            <?php endforeach ?>
        </select>
        <br>
        <button type="submit">them</button>
        <a href="major.php" class="ds">danh sach</a>
    </form>

</body>

</html>