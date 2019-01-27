<?php

/**
 * 외부에서 온 변수는 늘 의심해야 합니다.
 * filter_var, filter_input 함수로 올바른 형식의 값인지 확인하세요.
 */
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$password = password_hash(filter_input(INPUT_POST, 'password'), PASSWORD_DEFAULT);

if($email && $password):

    $filename = __DIR__. "/../../storage/users.csv";
    if(file_exists($filename)):
        /**
         * 같은 이메일이 있는지 검사합니다.
         * 
         * 모든 라인을 검사하기 때문에 파일이 커지면 느려집니다.
         * 데이터베이스가 아닌 파일시스템이라 발생하는 문제.
         */
        $fh = fopen($filename, "a+");
        $currentUserId = 1;
        while(!feof($fh) && ($row = fgetcsv($fh))):

            /** 
             * CSV 파일에 저장된 데이터 필드입니다.
             * 키값이 없으므로 구분을 위해 따로 변수를 선언해둡니다.
             */
            $_email = $row[1];

            if($email == $_email):
                header("HTTP/1.1 400 Bad request");
                echo json_encode([ "message" => "400 Bad reqeust" ]);
                exit;
            endif;
            $currentUserId++;
        endwhile;

        // 유저를 추가합니다.
        fputcsv($fh, [ $currentUserId, $email, $password ]);
        fclose($fh);
    endif;

    // 홈으로 리다이렉트합니다.
    header("HTTP/1.1 302 Redirect");
    header("location: /");

// 유효하지 않은 값을 전송한 경우 잘못된 요청임을 알립니다.
else:
    header("HTTP/1.1 400 Bad request");
    echo json_encode([ "message" => "400 Bad reqeust" ]);
endif;