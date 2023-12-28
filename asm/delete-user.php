<?php
$id = $_GET['id'];
$conn = new PDO("mysql:host=127.0.0.1;dbname=asm18314;charset=utf8", "root", "");
$query = "delete from user where id =$id";
$stmt = $conn->prepare($query);
$stmt->execute();
header('location:listuser.php');//dieu huong lai trang listuser.php