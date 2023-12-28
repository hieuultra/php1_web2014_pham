<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../asmtest/QLsanPham/list-product.css">
</head>
<style>
    .td {
        width: 1500px;
    }

    .right {
        width: 1500px;
    }

    .anh {
        width: 100px;
        height: 100px;
        margin: 10px;
    }

    .id {
        width: 50px;
        height: 100px;
        font-size: 20px;
        font-weight: bold;
    }

    .fullname {
        width: 200px;
        height: 100px;
    }

    .email {
        width: 100px;
        height: 100px;
    }

    #image {
        width: 500px;
        height: 100px;
    }

    .address {
        width: 100px;
        height: 100px;
    }

    .majorid {
        width: 50px;
        height: 100px;
    }

    .image {
        width: 100px;
        height: 80px;
    }

    .birthday,
    .skill,
    .hobbie {
        width: 100px;
        height: 100px;
    }

    .them {
        font-size: 30px;
        font-weight: bold;
        text-align: center;
    }

    .them1 {
        text-decoration: none;

    }

    .them1:hover {
        background-color: green;
    }
</style>

<body>
    <?php
    require_once 'conection1.php';
    $sql = "select * from profile";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $major = $stmt->fetchAll();
    ?>
    <div class="right">
        <div style="color:green;">
            <?= $_GET['message'] ?? '' ?>
        </div>
        <div class="td">Thong tin sinh vien</div>
        <table border="1">
            <thead>
                <tr>
                    <th>Profile-id</th>
                    <th>Fullname</th>
                    <th>avatar</th>
                    <th>Birthday</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Hobbie</th>
                    <th>Skill</th>
                    <th>Major_id</th>
                    <th colspan="3">action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($major as $m) : ?>
                    <tr>
                        <td class="id"><?= $m['id_profile'] ?></td>
                        <td class="fullname"><?= $m['fullname'] ?></td>
                        <td class="avatar"> <img src="image/<?= $m['avatar'] ?>" alt="" width="120px"></td>
                        <td class="birthday"><?= $m['birthday'] ?></td>
                        <td class="email"><?= $m['email'] ?></td>
                        <td class="address"><?= $m['address'] ?></td>
                        <td class="hobbie"><?= $m['hobbie'] ?></td>
                        <td class="skill"><?= $m['skill'] ?></td>
                        <td class="majorid"><?= $m['major_id'] ?></td>
                        <td class="sua">
                            <a href="sua-file.php?id_profile=<?= $m['id_profile'] ?>">sua</a>
                        </td>
                        <td class="xoa">
                            <a onclick="return confirm('ban co chac chan muon xoa khong?')" href="xoa-file.php?id_profile=<?= $m['id_profile'] ?>">xoa</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
    <div class="them">
        <a href="add-file.php?id_profile=<?= $m['id_profile'] ?>" class="them1">them</a>
    </div>

</body>

</html>