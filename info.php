<?php
    $info = $_GET['c'];  // GET 방식으로 전달된 'info' 매개변수 값을 가져옵니다.

    $file = fopen('info.txt', 'w');
    fwrite($file, $info);  // info.txt 파일에 가져온 정보를 저장합니다.
    fclose($file);

?>