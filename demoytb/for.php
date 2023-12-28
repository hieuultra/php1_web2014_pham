<?php
for ($i = 1; $i <= 5; $i++) {
    echo "<br>$i.xin chao cac ban";
}

for ($num = 1; $num <= 10; $num++) {
    for ($i = 1; $i <= 10; $i++) {
        $a = $i * $num;
        echo "<br>" . $i . "x" . $num . "=" . $a;
    }
    echo "<br> <br>";
}
echo "<br>----------------------";
//vd tinh tong cac so tu 1 ->100
$tong = 0;
for ($num = 1; $num <= 100; $num++) {
    $tong += $i;
}
echo "tong la:" . $tong;
