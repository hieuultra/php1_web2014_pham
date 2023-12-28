<?php
require_once '../connect.php';
$id = $_GET['catid'];
$sql = "delete from categories where catid=$id";
$stmt = $conn->prepare($sql);
$stmt->execute();
$e = 'xoa du lieu thanh cong';
header("location:list-cat.php?me=" . $e);
die;
