<?php
$a = 4;
$b = 7;
$c = 0;

$op = '+';

switch ($op) {
    case '+':
        $c = $a + $b;
        break;
    case '-':
        $c = $a + $b;
        break;
    case '*':
    case ':':
        echo '...';
        break;
    default:
        echo 'please choose: +,-,x,:';
        break;
}
echo "<br>result:" . $c;
