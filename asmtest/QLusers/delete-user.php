<?php 
require_once '../connect.php';
$id=$_GET['id'];
$sql="delete from user where id =$id";
$stmt=$conn->prepare($sql);
$stmt->execute();
$e = 'xoa du lieu thanh cong';
header("location:list_user.php?me=" . $e);