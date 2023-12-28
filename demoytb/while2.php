<?php
$count = 0;
$sum = 0;
$i = 27;
while ($i <= 250) {
    if ($i % 3 == 0) {
        $count++;
        $sum += $i;
    }
    $i++;
}
$avg = $sum / $count;

echo "average:" . $avg;
