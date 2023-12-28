<?php
function pheptinh($pt, $a, $b)
{
    if ($pt == '+') {
        return $a + $b;
    } else if ($pt == '-') {
        return $a - $b;
    } else if ($pt == '*') {
        return $a * $b;
    } else if ($pt == '/') {
        if ($b != 0) {
            return $a / $b;
        } else {
            echo "ko the chia cho 0<br>";
        }
    }
}
$cong = pheptinh('+', 3, 1);
$tru = pheptinh('-', 3, 2);
$nhan = pheptinh('*', 3, 7);
$chia = pheptinh('/', 3, 8);
echo "cong:" . $cong . "<br>";
echo "tru:" . $tru . "<br>";
echo "nhan:" . $nhan . "<br>";
echo "chia:" . $chia . "<br>";
