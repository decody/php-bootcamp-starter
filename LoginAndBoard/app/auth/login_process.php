<?php

/**
 * 외부에서 온 변수는 늘 의심해야 합니다.
 * filter_var, filter_input 함수로 올바른 형식의 값인지 확인하세요.
 */
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$password = filter_input(INPUT_POST, 'password');

if($email && $password):
    $filename = __DIR__. "/../../storage/users.csv";
    if(file_exists($filename)):
        $fh = fopen($filename, "r");
        while(!feof($fh) && ($row = fgetcsv($fh))):
            
            /** 
             * CSV 파일에 저장된 데이터 필드입니다.
             * 키값이 없으므로 구분을 위해 따로 변수를 선언해둡니다.
             */
            $_id = $row[0];
            $_email = $row[1];
            $_password = $row[2];
            
            if($email == $_email):
                if(password_verify($password, $_password)):
                    // 로그인 세션을 시작합니다.
                    session_start();
                    $_SESSION['user'] = [
                        'id'    => $_id,
                        'email' => $_email
                    ];
                    fclose($fh);
                    // 홈으로 리다이렉트합니다.
                    header("HTTP/1.1 302 Redirect");
                    header("location: /");
                    exit;
                // 비밀번호가 틀린경우
                else:
                    header("HTTP/1.1 400 Bad request");
                    echo json_encode([ "message" => "400 Bad reqeust" ]);

                    fclose($fh);
                    exit;
                endif;
            endif;
        endwhile;
        // 아이디가 없는경우
        header("HTTP/1.1 400 Bad request");
        echo json_encode([ "message" => "400 Bad reqeust" ]);

        fclose($fh);
        exit;
    endif;
// 유효하지 않은 값을 전송한 경우 잘못된 요청임을 알립니다.
else:
    header("HTTP/1.1 400 Bad request");
    echo json_encode([
        "message" => "400 Bad reqeust"
    ]);
endif;