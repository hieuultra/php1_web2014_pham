<?php
global $nghiem; //khai bao bien toan cuc
?>
<!doctype html>
<html lang="en">

<head>
    <title>Giai pt bac 1</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <div class="jumbotron text-center">
        <h1 class="display-3">Giai pt</h1>
        <p class="lead">Giai pt bac nhat 1 an so</p>
        <hr class="my-2">
    </div>

    <div class="container">
        <div class="card-columns">
            <div class="card">
                <img class="card-img-top" src="holder.js/100x180/" alt="">
                <div class="card-body">
                    <h4 class="card-title">Giai pt</h4>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="">He so a</label>
                            <input type="text" class="form-control" name="txtHeSoa" id="txtHeSoa" aria-describedby="helpId" placeholder="">
                            <small id="helpId" class="form-text text-muted">Help text</small>
                        </div>
                        <div class="form-group">
                            <label for="">He so b</label>
                            <input type="text" class="form-control" name="txtHeSob" id="txtHeSob" aria-describedby="helpId" placeholder="">
                            <small id="helpId" class="form-text text-muted">Help text</small>
                        </div>
                        <button type="submit" name="btnNghiem" class="btn btn-primary">Nghiem</button>
                    </form>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="holder.js/100x180/" alt="">
                <div class="card-body">
                    <h4 class="card-title">Ket qua</h4>
                    <label id="lblkq" name="lblkq" for="" type="text"></label>
                </div>
            </div>
        </div>
    </div>

    <?php
    //kiem tra xem button nghiem co dc click ko
    if (isset($_POST['btnNghiem'])) {
        //neu click vao button nghiem
        //lay ve he so a
        $a = $_POST['txtHeSoa'];
        $b = $_POST['txtHeSob'];
        if ($a == 0) {
            if ($b == 0) {
                $nghiem = 'pt co vo so nghiem';
                echo '<script type="text/javascript">';
                echo 'document.getElementById("lblt").innerHTML= ' . $nghiem;
                echo '</script>';
            } else {
                $nghiem = 'pt vo nghiem';
                echo '<script type="text/javascript">';
                echo 'document.getElementById("lblkq").innerHTML= ' . $nghiem;
                echo '</script>';
            }
        } else {
            $nghiem = -$b / $a;
            echo '<script type="text/javascript">';
            echo 'document.getElementById("lblkq").innerHTML= ' . $nghiem;
            echo '</script>';
        }
    }
    ?>
</body>

</html>