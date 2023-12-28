<?php
require_once 'conect.php';
$id = $_GET['id'];
$sql = "delete from courses where id=$id";
$stmt = $conn->prepare($sql);
$stmt->execute();
setcookie("mes", "xoa data thanh cong", time() + 1);
header("location:list-course.php");
die;
