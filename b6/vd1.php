<?php
//cac ham co ban xu ly ngay thang nam

//thiet lap timezone
date_default_timezone_set("Asia/Ho_Chi_Minh");
//ham lay thoi gian timestamp(so nguyen)
$date_in = time();
echo "<p>thoi gian timestamp:$date_in</p>";
//ngay thang nam
$date2 = date("Y-m-d H:i:s", time());
echo "<p>hom nay:$date2</p>";

//ham khoi tao ngay thang
$date3 = date_create(); //neu ko co tham so ngay thang nam thi la thoi diem hien tai
$date4 = date_create('2000-10-13');

echo "<pre>";
var_dump($date3, $date4);

//ham chuyen ngay thang nam sang timestamp
$date5 = strtotime('2002-10-30');
echo "<p>2002-10-30 -> $date5</p>";

//ham tinh tuoi
$age = date_diff($date3, $date4);
echo "<p>tuoi:" . $age->format("%y") . " </p>";
