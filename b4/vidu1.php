<?php
//ham ko tra ve gia tri
//function tenham(bien) {
//     code
// }
//tinh tong 2 so
// function tinhtong($a, $b)
// {
//     $tong = $a + $b;
//     echo "$a+$b=$tong";
// }
// tinhtong(1, 2);

//ham co gia tri tra ve
function tt($a, $b)
{
    return $a + $b;
}
$a = 12;
$b = 22;
echo "<h2> $a + $b =" . tt($a, $b) . "</h2>";

//ham ko co tham so
function tt1()
{
    //lay tham so truyen vao ham
    $arr = func_get_args();
    var_dump($arr);
}
echo "<pre>";
tt1(1, 2, 5, 'hi', 'hai');


//tinh tong cac so
function ttcs()
{
    $arr = func_get_args();
    $tong = array_sum($arr);
    return $tong;
}
echo "tong cac so:" . ttcs(1, 2, 3, 4);


//su dung tham so la bien ...
echo "<br>";
function laythamso2(...$args)
{
    var_dump($args);
}
laythamso2(1, 2, 3, 'haha');


//callback function
function hello()
{
    echo "<h2>xin chao cac ban</h2>";
}
function sayhello($callback)
{
    $callback();
}
sayhello('hello');
