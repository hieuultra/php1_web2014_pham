<?php
session_start();
//kiem tra session co ton tai ko
if (isset($_SESSION['username'])) {
    echo "<h1>chao mung " . $_SESSION['username'] . "den vs web</h1>";
    echo "<a href='logout_session.php'>Thoat</a>";
} else {
    echo "<p>ban chua co phien lam vc o day ca</p>";
}
