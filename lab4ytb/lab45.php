<?php
$mang = array('a' => 10, 'b' => 20, '3' => 50, 'c' => -2);
//Hàm ksort()được sử dụng để sắp xếp mảng $mang theo 
//các khóa của nó theo thứ tự tăng dần.
ksort($mang);
//rong mỗi lần lặp, khóa hiện tại được gán cho biến
// $keyvà giá trị tương ứng được gán cho biến $value
foreach ($mang as $key => $value) {
    echo $key . "=>" . $value . "<br>";
}
