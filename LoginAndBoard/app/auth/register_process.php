<?php

require_once("../lib/db.php");

/**
 * 외부에서 온 변수는 늘 의심해야 합니다.
 * filter_var, filter_input 함수로 올바른 형식의 값인지 확인하세요.
 */
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$password = password_hash(filter_input(INPUT_POST, 'password'), PASSWORD_DEFAULT);

if($email && $password):
    $sql = "INSERT INTO users(email, password) VALUES('$email', '$password')";
    
    if($result = mysqli_query($conn, $sql)): 
        mysqli_free_result($result);
    endif;

    mysqli_close($conn);

    // 홈으로 리다이렉트합니다.
    header("HTTP/1.1 302 Redirect");
    header("location: /");

// 유효하지 않은 값을 전송한 경우 잘못된 요청임을 알립니다.
else:
    header("HTTP/1.1 400 Bad request");
    echo json_encode([
        "message" => "400 Bad reqeust"
    ]);
endif;