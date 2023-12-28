<?php
//su dung ham parse_url
    $url="https://vnexpress.net/16-nguoi-bi-bat-trong-vu-tan-cong-tru-so-cong-an-o-dak-lak-4616232.html";
    $a=parse_url($url);
    echo 'Scheme: '.$a['scheme']."<br>";
    echo 'Host: '.$a['host']."<br>";
    echo 'path: '.$a['path']."<br>";

?>