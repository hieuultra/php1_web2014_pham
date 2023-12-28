<?php
if (isset($_COOKIE['username'])) {
    $user = $_COOKIE['username'];
    echo "<h1>chao mung $user den vs web</h1>";
    echo "<a href='logout-cookie.php'>thoat</a>";
} else {
    echo "<p>ban chua dang nhap</p>";
}
