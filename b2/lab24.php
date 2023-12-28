<?php
$numbers = [2, 4, 6, 8, 10];
echo "<pre>";
var_dump($numbers);

// Tìm số lớn nhất trong mảng
$maxNumber = max($numbers);

// Tính trung bình cộng các số trong mảng
$average = array_sum($numbers) / count($numbers);

echo "Số lớn nhất trong mảng: " . $maxNumber . "<br>";
echo "Trung bình cộng các số trong mảng: " . $average;
?>
