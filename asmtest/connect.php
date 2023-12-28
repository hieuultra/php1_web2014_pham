<?php
//thong tin server
$host = "localhost";
$dbname = 'asm1';
$username = "root";
$pass = "";

//ket noi CSDL
//xử lý lỗi trong PHP.
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //bo cx dc
} catch (PDOException $e) {
    echo "loi ket noi CSDL" . $e->getMessage();
}
