<?php
require_once '../connect.php';
$maHD = $_GET['maHD'];
$sql = "delete from orderschitiet where maHD=$maHD";
$stmt = $conn->prepare($sql);
$stmt->execute();
$e = 'Xoa thanh cong!!';
header("location:qldh.php?mes=" . $e);
die;
