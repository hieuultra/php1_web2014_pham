<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $a = $_POST['s1'];
    $b = $_POST['s2'];
    $sum = $a + $b;
    // echo "so1:" . $a;
    // echo "<br>so2:" . $b;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tinh tong</title>
</head>

<body>
    <form action="" method="post">
        so 1:
        <input type="number" name="s1" value="<?= ($a) ? $a : '' ?>">
        <br>
        so 2:
        <input type="number" name="s2" value="<?= $b ?? '' ?>">
        <br>
        <button type="submit">tinh</button>
    </form>

    <div>
        <?php
        if (isset($sum)) :
        ?>
            <?= "tong:" . $sum ?>
        <?php
        endif
        ?>
    </div>
</body>

</html>