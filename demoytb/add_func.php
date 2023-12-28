<?php

function add($num1, $num2, $opt)
{
    $result = 0;

    switch ($opt) {
        case '+':
            $result = $num1 + $num2;
            break;
        case '-':
            $result = $num1 - $num2;
            break;
        case '*':
            $result = $num1 * $num2;
            break;
        case '/':
            $result = $num1 / $num2;
            break;
        default:
            echo "invalid data";
    }

    return $result;
}

$a= add(3,5,'+');
echo"result: $a <br>";

$a= add(5,7,'-');
echo "result: $a <br>";

$a= add(5,7,'*');
echo "result: $a <br>";

$a= add(5,7,'&');
echo " <br>result: $a";
