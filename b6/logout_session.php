<?php

session_start();
//co 2 cach
//c1
//huy toan bo session
session_destroy();

//c2
//su dung ham unset
unset($_SESSION['username']);

header("location:get-session.php");
die;
