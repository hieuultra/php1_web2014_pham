<?php
$host='localhost';
$user='root';
$pass="";
$db='php';
$conn=new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
    die('ket noi that bai:'.$conn->connect_error);
}else{
    $sql="INSERT INTO sinhvien VALUES('ph002','nguyen van N','tx-hn')";
    if($conn->query($sql)){
        echo 'Them du lieu thanh cong';
    }else{
        echo 'Them du lieu that bai:'.$conn->error;
    }
}
?>