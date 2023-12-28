<?php
//day la trang xu li viec day du lieu vao trong database
echo "<pre>";
var_dump($_POST);
$username = $_POST['username'];
$pass = $_POST['pass'];
$id = $_POST['user-id'];
$conn = new PDO("mysql:host=127.0.0.1;dbname=asm18314;charset=utf8", "root", "");
$query = "update user set username='$username',password='$pass' where id =$id";
$stmt = $conn->prepare($query);
$stmt->execute();
header('location:listuser.php');//dieu huong lai trang listuser.php