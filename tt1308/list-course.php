<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table {
        width: 90%;
        border-collapse: collapse;
        text-align: center;
    }

    th {
        background-color: black;
        color: white;
    }
</style>

<body>
    <?php
    session_start();
    if (!isset($_SESSION['user'])) {
        header("location:loginss.php");
    }
    require_once 'conect.php';
    $sql = "select id, course_name, price, cat_name,image from courses c join course_cat cc on c.cat_id=cc.cat_id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $course = $stmt->fetchAll();
    ?>

    <h1>danh sach khoa hoc</h1>
    <a href="add-course.php"> <button type="submit">them moi</button> </a>
    <div style="color:blue">
        <?= $_COOKIE['mes'] ?? '' ?>
    </div>
    <div>
        <?php if (isset($_SESSION['user'])) : ?>
            <strong>welcome <?= $_SESSION['user'] ?></strong>
            <a href="logoutss.php">thoat</a>
        <?php endif ?>
    </div>

    <table border="1">
        <thead>
            <tr>
                <th>id </th>
                <th>course_name</th>
                <th>price</th>
                <th>cat_name</th>
                <th>image</th>
                <th colspan="2">action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($course as $c) : ?>
                <tr>
                    <td><?= $c['id'] ?></td>
                    <td><?= $c['course_name'] ?></td>
                    <td><?= $c['price'] ?></td>
                    <td><?= $c['cat_name'] ?></td>
                    <td> <img src="img/<?= $c['image'] ?>" alt="" width="120px"> </td>
                    <td><a href="edit-c.php?id=<?= $c['id'] ?>">sua</a></td>
                    <td><a onclick="return confirm('ban co muon xoa ko?')" href="delet-c.php?id=<?= $c['id'] ?>">xoa</a></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

</body>

</html>