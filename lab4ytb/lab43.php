<?php
  $mang= array('abc','abxc','a','aaaaaa');
  $dodai= array_map('strlen',$mang);
  echo 'Do dai nho nhat :'.min($dodai)."<br>";
  echo "\n";
  echo 'Do dai lon nhat :'.max($dodai)."<br>";
?>