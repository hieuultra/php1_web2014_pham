<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list-air</title>
</head>
<style>
    table {
        width: 80%;
        border-collapse: collapse;
        text-align: center;
    }

    th {
        background-color: black;
        color: white;
    }

    .s,
    .x {
        text-decoration: none;
        color: black;
    }

    .s:hover,
    .x:hover {
        background-color: aqua;
    }
</style>

<body>
    <?php

    // if (!isset($_COOKIE['user'])) {
    //     header("location:loginck.php");
    // }
    session_start();
    if (!isset($_SESSION['username'])) {
        header("location:loginss.php");
    }
    require_once 'conect.php';
    $sql = "select flight_id, flight_number, image, total_passengers, description , airline_name 
    from flights fl join airlines a on fl.airline_id=a.airline_id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $flight = $stmt->fetchAll();
    ?>
    <h1>Danh sach chuyen bay</h1>
    <p> <a href="add-air.php"> <button type="submit">them moi</button></a></p>
    <div style="color:blue">
        <?= $_COOKIE['mes'] ?? '' ?>
    </div>
    <div>
        <?php if (isset($_SESSION['username'])) : ?>
            WELCOME <b><?= $_SESSION['username'] ?></b>
            <a href="logoutss.php">Thoát</a>
        <?php endif ?>
    </div>
    <table border="1">
        <thead>
            <tr>
                <th>flight_id</th>
                <th>flight_number</th>
                <th>image</th>
                <th>total_passengers</th>
                <th>description</th>
                <th> airline_name</th>
                <th colspan="2">action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($flight as $fl) : ?>
                <tr>
                    <td><?= $fl['flight_number'] ?></td>
                    <td> <img src="img/<?= $fl['image'] ?>" alt="" width="120px"> </td>
                    <td><?= $fl['total_passengers'] ?></td>
                    <td><?= $fl['description'] ?></td>
                    <td><?= $fl['airline_name'] ?></td>
                    <td><a class="s" href="edit-air.php?flight_id=<?= $fl['flight_id'] ?>">sua</a></td>
                    <td><a class="x" onclick="return confirm('ban co chac chan muon xoa ko?')" href="delet-air.php?flight_id=<?= $fl['flight_id'] ?>">xoa</a></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>

</html>