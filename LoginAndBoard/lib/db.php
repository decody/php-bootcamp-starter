<?php

/**
 * 데이터베이스 정보를 인라인으로 코드상에 노출시키는 것은 좋지 않습니다.
 * 웹서버 영역의 바깥에서 불러오는 것이 좋습니다.
 * 
 * 하지만, 클래식한 방법에서는 이렇게도 쓰인다는 점도 알아두세요.
 */
$conn = mysqli_connect("localhost", "root", "root", "tests");

if(mysqli_connect_errno()):
    die("Connect Error: ". mysqli_connect_error());
endif;