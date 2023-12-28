<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
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

    <?php
    // Kiểm tra điều kiện điểm nằm trong khoảng từ 0 đến 10
    $diem_error = '';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $mssv = $_POST["ms"];
        $ho_ten = $_POST["ht"];
        $ngay_sinh = $_POST["ns"];
        $diem = $_POST["d"];
        if ($diem < 0 || $diem > 10) {
            $diem_error = "Điểm phải từ 0 đến 10!";
        } else {
            // Hiển thị thông tin sinh viên
            echo "<p>MSSV: $mssv</p>";
            echo "<p>Họ tên: $ho_ten</p>";
            echo "<p>Ngày sinh: $ngay_sinh</p>";
            echo "<p>Điểm: $diem</p>";
        }

        // Hàm kiểm tra điểm sinh viên và thông báo kết quả
        function ktrdiem($diem)
        {
            if ($diem >= 5) {
                return "Sinh viên đã qua môn!";
            } else {
                return "Sinh viên chưa qua môn!";
            }
        }

        // Gọi hàm kiểm tra điểm và hiển thị kết quả
        $ket_qua = ktrdiem($diem);
        echo "<p>$ket_qua</p>";
    }
    ?>

    <h2>Nhap thong tin sinh vien</h2>
    <form action="" method="post">
        <label for="">MSSV:</label>
        <input type="text" name="ms" id=""><br><br>
        <label for="">Ho ten:</label>
        <input type="text" name="ht" id=""><br><br>
        <label for="">Ngay sinh:</label>
        <input type="text" name="ns" id=""><br><br>
        <label for="">Diem</label>
        <input type="number" name="d" id="" required>
        <div>
            <span style="color: red;"><?php echo $diem_error; ?></span><br>
        </div>
        <div>

        </div>
        <button type="submit" name="btn">SEND</button>
    </form>
</body>

</html>