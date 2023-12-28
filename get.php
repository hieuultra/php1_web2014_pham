<?php

//nhan thong tin tu form sd pt get
//sd bien moi truong $_GET
$hoten = $_GET['ten'];
$tuoi=$_GET['tuoi'];
$quequan=$_GET['qq'];
$email = $_GET['email'];

echo "ho ten la:" . $hoten;
echo "<br>tuoi la:" .$tuoi;
echo "<br>que quan la:" .$quequan;
echo "<br>email la:" . $email;
