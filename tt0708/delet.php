<?php
require_once 'conect.php';
$id = $_GET['carid'];
$sql = "delete from car where carid='$id'";
$stmt = $conn->prepare($sql);
$stmt->execute();
$me = 'xoa data thanh cong';
header("location:list-car.php?mes=" . $me);
die;
