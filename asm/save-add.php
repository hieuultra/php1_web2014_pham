<?php
$username = $_POST['username'];
$pass = $_POST['pass'];
$conn = new PDO("mysql:host=127.0.0.1;dbname=asm18314;charset=utf8", "root", "");
$query = "insert into user (username,password) value ('$username','$pass')";
$stmt = $conn->prepare($query);
$stmt->execute();
header("location:listuser.php");
