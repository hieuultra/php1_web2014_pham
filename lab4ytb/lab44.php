<?php
$array = array('1' => 5, '2' => 10, '3' => 6, '4' => -1);
// array_filter:lọc ra các phần tử khỏi mảng dựa trên hàm gọi lại.
$a = array_filter($array);
$tb = array_sum($a) / count($a);
echo "trung binh mang la:" . $tb;
$value = max($array);//lay ve gtln
$key = array_search(max($array), $array);//gtln cua key
echo "<br>";
echo "Gia tri lon nhtat la:" . $value . " thuoc key:" . $key;
