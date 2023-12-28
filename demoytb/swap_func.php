<?php

function swap(&$a, &$b)
{
    $temp = $a;

    $a = $b;//gan a = gia tri cua b
    $b = $temp;//gan b = gia tri cua temp
}

$num1 = 3;
$num2 = 5;

echo "<br> num1=$num1, num2 =$num2 <br>";

swap($num1, $num2);

echo "<br> num1=$num1, num2 =$num2 <br>";
