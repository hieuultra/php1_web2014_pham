<?php
//dinh nghia ham
 function giaithua($n){
    if($n==1){
        return 1;
    }else{
       return $n*giaithua($n-1);
    }
 }
 //goi ham
 $a=5;
 $kq=giaithua($a);
 print_r($kq);
?>