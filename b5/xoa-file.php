<?php
require_once 'conection1.php';
//lay ra data can xoa
$id = $_GET['id_profile'];
$sql = "delete from profile where id_profile=$id";
$stmt = $conn->prepare($sql);
$stmt->execute();
$m = 'Xoa du lieu thanh cong';
header("location:major.php?message=" . $m);
die;
