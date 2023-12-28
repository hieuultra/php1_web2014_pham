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
        $id = $_POST['id'];
        $name = $_POST['fullname'];

        $file = $_FILES['avatar'];
        if ($file['size'] > 0) {
            $img = $file['name'];
            move_uploaded_file($file['tmp_name'], "image/" . $img);
        } else {
            $img = $_POST['avatar'];
        }

        $b = $_POST['birth'];
        $e = $_POST['email'];
        $a = $_POST['address'];
        $h = $_POST['hobbie'];
        $s = $_POST['skill'];
        $ma = $_POST['major_id'];

        $sql = "update profile set fullname='$name',
        avatar='$img',birthday='$b',email='$e',address='$a',hobbie='$h',skill='$s',major_id='$ma' where id_profile='$id'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $e = 'cap nhap du lieu thanh cong';
    }
    //lay du lieu vao option
    $sql = "select * from majors";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $major = $stmt->fetchAll();

    //lay ra data can sua
    $id = $_GET['id_profile'];
    $sql = "select * from profile where id_profile=$id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $profile = $stmt->fetch();
    ?>
    <div style="color:red">
        <?= $e ?? '' ?>
    </div>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $profile['id_profile'] ?>">
        <input type="text" name="fullname" id="" value="<?= $profile['fullname'] ?>"> <br><br>
        AVATAR<input type="file" name="avatar" id="" ><br><br>
        <!-- luu lai thong tin anh cu neu nguoi dung ko thay anh -->
        <input type="hidden" name="avatar" value="<?= $profile['avatar']  ?>">
        BIRTH<input type="text" name="birth" value="<?= $profile['birthday'] ?>"><br><br>
        EMAIL<input type="text" name="email" value="<?= $profile['email'] ?>"><br><br>
        ADDRESS<input type="text" name="address" value="<?= $profile['address'] ?>"><br><br>
        HOBBIE<input type="text" name="hobbie" value="<?= $profile['hobbie'] ?>"><br><br>
        SKILL<input type="text" name="skill" value="<?= $profile['skill'] ?>"><br><br>
        <select name="major_id" id="">
            <?php foreach ($major as $m) : ?>
                <option value="<?= $m['major_id'] ?>" <?= ($m['major_id'] == $profile['major_id']) ? 'selected' : '' ?>>
                    <?= $m['major_name'] ?>
                </option>
            <?php endforeach ?>
        </select>
        <br>
        <button type="submit">cap nhap</button>
        <a href="major.php" class="ds">danh sach</a>
    </form>

</body>

</html>