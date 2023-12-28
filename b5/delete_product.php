<?php
require_once 'conection.php';
//lay ra data can xoa
$id = $_GET['id'];
$sql = "delete from product where id=$id";
$stmt = $conn->prepare($sql);
$stmt->execute();
$m = 'xoa du lieu thanh cong';
header("location:product.php?message=" . $m);
die;
