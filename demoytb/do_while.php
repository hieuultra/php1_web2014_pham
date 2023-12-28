<?php
$num = 0;
do {
    $num = readline("enter a number:");

    if ($num < 0 || $num > 10) {
        echo "<br> Invalid point.(valid point from 0 to 10)";
    }
} while ($num < 0 || $num > 10);

echo "<br> yout point is:" . $num;
