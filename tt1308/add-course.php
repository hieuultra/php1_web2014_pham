<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once 'conect.php';
    if (isset($_POST['btn'])) {
        $cn = $_POST['cn'];
        $pr = $_POST['pr'];
        $catn = $_POST['catn'];
        $file = $_FILES['image'];
        $img = $file['name'];
        move_uploaded_file($file['tmp_name'], "img/" . $img);

        $sql = "insert into courses (course_name, price, cat_id, image) values ('$cn','$pr','$catn','$img')";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        setcookie("mes", "them data thanh cong", time() + 1);
        header("location:list-course.php");
    }
    $sql = "select * from course_cat";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $cs = $stmt->fetchAll();

    ?>
    <h2>them moi khoa hoc</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <p>
            course_name <input type="text" name="cn" id="">
        </p>
        <p>
            price <input type="text" name="pr" id="">
        </p>
        <p>
            <select name="catn" id="">
                <?php foreach ($cs as $c) : ?>
                    <option value="<?= $c['cat_id'] ?>">
                        <?= $c['cat_name'] ?>
                    </option>
                <?php endforeach ?>
            </select>
        </p>
        <p>
            <input type="file" name="image" id="">
        </p>
        <p>
            <button type="submit" name="btn">them</button>
        </p>
    </form>




</body>

</html>