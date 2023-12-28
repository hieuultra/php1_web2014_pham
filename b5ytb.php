<?php
$val = 'abc';
$string = "\"hello\" cac ban";
echo $string;
//luu y: neu chuoi dc dat trong sau nhay kep thi cac ky 
//tu nhay kep phai them dau \ o truoc dau nhay kep
$string2 = '"hello" cac ban';
echo "<br>" . $string2;
echo "<br>toi dang $val ";
echo '<br>toi dang $val ';

//cac ham xu ly chuoi thong dung

//explode(tham so1, tham so2):tach 1 chuoi thanh 1 mang
//tham so 1: ky tu de tach mang
//tham so 2:ten cua chuoi minh muon tach
//ham var_dump: hien thi thong tin cua bien, mang... gom kieu du lieu va gia tri
$string3 = "toi la hieu";
echo "<br>" . $string3;
echo "<br>";
var_dump(explode(' ', $string3));

//implode(ts1, ts2): gop cac phan tu trong 1 mang thanh 1 chuoi
//ts1:ky tu giua cac phan tu
//ts2:mang ma minh muon gop thanh chuoi

echo "<br>" . implode(' ', array('xin', 'chao', 'cac', 'ban'));

//strlen(chuoi): tra ve do dai cua chuoi
echo "<br>";
echo strlen($string3);

//str_word_count(chuoi): dem so tu co trong 1 chuoi
echo '<br>';
echo str_word_count($string3);

//str_replace(chuoi can tim, chuoi thay the, chuoi goc)
echo "<br>";
echo str_replace('hieu', 'phuong', $string3);

//htmlentities(chuoi): chuyen cac the html trong chuoi sang dang chuoi
echo "<br>";
$newstr =  htmlentities("<p>hello</p>");
echo $newstr;

//html_entity_decode(chuoi):dao nguoc lai ben tren
echo "<br>";
echo html_entity_decode($newstr);

//strstr(chuoi goc,ky tu muon tach, true/false): tach 1 chuoi bat dau tu ky tu muon tach
echo "<br>";
$str4 = "abcd#efgh";
//true; tach tu ky tu dau tien cua chuoi den ky tu muon tach
echo strstr($str4, '#', true);
echo "<br>";
//false: tach tu ky tu muon tach den cuoi cung
echo strstr($str4, '#', false);

//strtolower(chuoi goc):chuyen tat ca ky tu trong 1 chuoi sang thuong
//strtoupper(chuoi goc):chuyen tat ca cac ky tu trong chuoi sang viet hoa

//b1:cho 1 chuoi dia chi email: hieubtph32408@fpt.edu.vn
//viet 1 ham de tach username tu email
echo "<br>";
$emailfpt = "hieubtph32408@fpt.edu.vn";
function tach()
{
    global $emailfpt;
    echo strstr($emailfpt, '3', true);
}
tach();

//strpos(chuoi goc,chuoi muon tim): tra ve vi tri cua chuoi muon tim
//neu chuoi muon tim co trong chuoi goc thi tra ve vi tri cua no
//neu chuoi muon tim ko co trong chuoi goc thi tra ve false
echo "<br>";
$str5 = 'chi hang xom xinh the nhi';
var_dump(strpos($str5, 'the'));

//trim(chuoi goc, ky tu muon xoa):
echo "<br>";
$str6 = '%lahieu';
echo trim($str6, 'u');
$str7 = '     he he     ';
echo "<br>";
echo trim($str7);

//b2:cho chuoi:"hom nay hoc ly thuyet nhieu the nhi"
//viet 1 ham de kiem tra xem chuoi da cho co chua chuoi 'ly thuyet' hay ko
//neu co hien thi:co chua...
//neu ko hien thi: ko chua...
echo "<br>";
$str8 = 'hom nay hoc nhieu ly thuyet the nhi';
echo "<br>";
function b2()
{
    global $str8;
    if (strpos($str8, 'ly thuyet') != false) {
        echo "chuoi co chua ly thuyet";
    } else {
        echo "chuoi ko  chua ly thuyet";
    }
}
b2();

//b3:cho chuoi:"ronando la cau thu xuat sac nhat the gioi"
//viet 1 ham de lay ra tu "ronando" trong chuoi tren
echo "<br>";
$str9 = "ronando la cau thu xuat sac nhat the gioi";
echo "<br>";
function b3()
{
    global $str9;
    strstr($str9, 'la', true);
    return strstr($str9, 'la', true);
}
echo b3();
