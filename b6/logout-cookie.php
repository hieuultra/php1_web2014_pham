<?php
//logout set time nho hon time hien tai
setcookie("username", '', time() - 3600);
header("location:get-cookie.php");
die;