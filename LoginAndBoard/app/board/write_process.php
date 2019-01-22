<?php

require_once("../lib/db.php");

session_start();

// 로그인을 체크해야합니다.
if($_SESSION['user']):
    /**
     * 외부에서 온 변수는 늘 의심해야 합니다.
     * filter_var, filter_input 함수로 올바른 형식의 값인지 확인하세요.
     */
    $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS);
    $content = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_SPECIAL_CHARS);

    if($title && $content):
        $sql = "INSERT INTO posts(user_id, title, content) 
            VALUES(
                {$_SESSION['user']['id']}, 
                '$title', 
                '$content'
            )";

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
// 로그인이 안 된 경우입니다.
else:
    header("HTTP/1.1 401 Unauthorized");
    echo json_encode([
        "message" => "401 Unauthorized"
    ]);
endif;