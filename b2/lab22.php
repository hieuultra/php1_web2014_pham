<?php

$a = array("1" => 12, "2" => 1, "3" => 2, "4" => 15, "5" => 18, "6" => 21, "7" => 6, "8" => 3, "9" => 9, "10" => 4);
echo "<pre>";
var_dump($a);

$tong = 0;
foreach ($a as $key => $value) {
    if ($value > 10 && $value % 3 == 0) {
        $tong += $value;
    }
}
echo "tong cac so lon hon 10 va chia het cho 3 la:" . $tong;
