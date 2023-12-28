<?php
/* function(ham)*/

//    cu phap khai bao:
//    function tenham(tham so){
//     khoi lenh;
//     return value;
//    } 
//    //cac kieu ham trong php:

//    ham ko co tham so va ko co gia tri tra ve
   function tinhtong()
 {
    $a = 5;
    $b = 10;
    $tong = $a + $b;
}
 echo tinhtong();

//ham ko co tham so va co gia tri tra ve
// function tinhtong()
// {
//     $a = 5;
//     $b = 10;
//     $tong = $a + $b;
//     return $tong;
// }
// echo tinhtong();

//ham co tham so va co gia tri tra ve
//  function tinhtong($a, $b)
// {
//     $tong = $a + $b;
//     return $tong;
// }
// echo tinhtong(10,20);

//ham co tham so va ko co gia tri tra ve
//   function tinhtong($a, $b)
// {
//     $tong = $a + $b;
//     echo $tong;
// }
// echo tinhtong(1,20);


//gan gt mac dinh cho tham so trong ham
function show($mess = 'check')
{
    $result = "";
    if ($mess == 'check') {
        $result = 'ok';
    } else {
        $result = 'not ok';
    }
    echo $result;
}
show('check');

//pham vi cua bien
/*bien cuc bo: dc dinh nghia ben trong ham
pham vi hieu luc ben trong ham
*/

//bien toan cuc: dn ben ngoai ham, pham vi hieu luc toan bo chuong trinh
//de lay gt cua bien toan cuc trong ham ta sd global
// $a = 5;
// function tinhtong()
// {
//     global $a;
//     $b = 10;
//     $tong = $a + $b;
//     echo $tong;
// }
// tinhtong();

//bien tinh
//la cac bien co dinh ben trong ham
//gia tri cua bien se duoc luu lai sau moi lan goi ham
//bien tinh dc khai bao voi tu khoa static
// function test()
// {
//     static $diem = 0;
//     $diem++;
//     echo "<br>" . $diem;
// }
// test();
// test();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function</title>
</head>

<body>
    <h1>demo function</h1>
</body>

</html>