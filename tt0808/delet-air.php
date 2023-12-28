<?php
require_once 'conect.php';
$id = $_GET['flight_id'];
$sql = "delete from flights where flight_id='$id'";
$stmt = $conn->prepare($sql);
$stmt->execute();
setcookie("mes","xoa data  thanh cong",time()+1);
header('location:list-air.php');
die;
