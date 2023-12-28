<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list-car</title>
</head>
<style>
    table {
        width: 50%;
        border-collapse: collapse;
        text-align: center;
    }

    th {
        height: 40px;
        background-color: black;
        color: white;
    }
</style>

<body>
    <?php
    require_once 'conect.php';
    $sql = "select * from car";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $car = $stmt->fetchAll();

    ?>
    <h1>danh sach san pham</h1>
    <p> <a href="add-car.php"><button type="submit">them moi san pham</button></a></p>
    <div style="color:red">
        <?= $_GET['mes'] ?? ''  ?>
    </div>

    <table border="1">
        <thead>
            <tr>
                <th>car-name</th>
                <th>car-img</th>
                <th>car-price</th>
                <th>car-quantity</th>
                <th>car-description</th>
                <th colspan="2">action</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($car as $c) : ?>
            <tr>

                <td><?= $c['carname'] ?></td>
                <td> <img src="img/<?= $c['carimg'] ?>" alt="" width="120px"> </td>
                <td><?= $c['carprice'] ?></td>
                <td><?= $c['carquantity'] ?></td>
                <td><?= $c['description'] ?></td>
                <td> <a href="edit-car.php?carid=<?= $c['carid'] ?>">sua</a> </td>
                <td><a onclick="return confirm('ban co muon xoa ko?')" href="delet.php?carid=<?= $c['carid'] ?>">xoa</a></td>

            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
</body>

</html>