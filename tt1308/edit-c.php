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
        $id = $_POST['id'];
        $cn = $_POST['cn'];
        $pr = $_POST['pr'];
        $catn = $_POST['catn'];
        $file = $_FILES['image'];
        if ($file['size'] > 0) {
            $img = $file['name'];
            move_uploaded_file($file['tmp_name'], "img/" . $img);
        } else {
            $img = $_POST['image'];
        }


        $sql = "update courses set course_name='$cn', price='$pr', cat_id='$catn', image='$img' where id=$id ";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        setcookie("mes", "edit data thanh cong", time() + 1);
        header("location:list-course.php");
    }
    $sql = "select * from course_cat";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $cs = $stmt->fetchAll();

    $id = $_GET['id'];
    $sql = "select * from courses where id=$id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $css = $stmt->fetch();


    ?>
    <h2>update khoa hoc</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $css['id'] ?>">
        <p>
            course_name <input type="text" name="cn" id="" value="<?= $css['course_name'] ?>">
        </p>
        <p>
            price <input type="text" name="pr" id="" value="<?= $css['price'] ?>">
        </p>
        <p>
            <select name="catn" id="">
                <?php foreach ($cs as $c) : ?>
                    <option value="<?= $c['cat_id'] ?>" <?= ($c['cat_id'] == $css['cat_id']) ? 'selected' : '' ?>>
                        <?= $c['cat_name'] ?>
                    </option>
                <?php endforeach ?>
            </select>
        </p>
        <p>
            <input type="file" name="image" id="" value="">
        </p>
        <input type="hidden" name="image" value="<?= $css['image'] ?>">
        <p>
            <img src="img/<?= $css['image'] ?>" alt="" width="110">
        </p>
        <p>
            <button type="submit" name="btn">sua</button>
        </p>
    </form>




</body>

</html>