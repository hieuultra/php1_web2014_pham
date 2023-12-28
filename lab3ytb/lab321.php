<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cong tru nhan chia</title>
</head>

<body>
  <h1>cong tru nhan chia</h1>
  <form action="" method="post">
    So hang a <input type="text" name="txtA" value="" />
    <br />
    So hang b <input type="text" name="txtB" value="" />
    <br />
    <input type="submit" value="+" name="btnSM" />
    <input type="submit" value="-" name="btnSM" />
    <input type="submit" value="*" name="btnSM" />
    <input type="submit" value="/" name="btnSM" />
  </form>

  <?php
  function pheptinh($pt, $a, $b)
  {
    if ($pt == '+') {
      return $a + $b;
    } else if ($pt == '-') {
      return $a - $b;
    } else if ($pt == '*') {
      return $a * $b;
    } else if ($pt == '/') {
      if ($b != 0) {
        return $a / $b;
      } else {
        echo "ko the chia cho 0<br>";
      }
    }
  }
  if (isset($_POST['btnSM'])) {
    $a = $_POST['txtA'];
    $b = $_POST['txtB'];
    $pt = $_POST['btnSM'];
    if ($pt == '+') {
      $kq = pheptinh($pt, $a, $b);
      echo 'ket qua phep cong:' . $kq;
    } else if ($pt == "-") {
      $kq = pheptinh($pt, $a, $b);
      echo 'ket qua phep tru:' . $kq;
    } else if ($pt == "*") {
      $kq = pheptinh($pt, $a, $b);
      echo 'ket qua phep nhan:' . $kq;
    } else if ($pt == "/") {
      $kq = pheptinh($pt, $a, $b);
      echo 'ket qua phep chia:' . $kq;
    }
  }
  ?>
</body>

</html>