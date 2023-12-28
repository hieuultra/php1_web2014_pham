<?php
require_once '../connect.php';
$id = $_GET['productId'];
$sql = "delete from products where productId=$id";
$stmt = $conn->prepare($sql);
$stmt->execute();
$me = 'xoa du lieu thanh cong';
header("location:list_product.php?mes=" . $me);
die;
