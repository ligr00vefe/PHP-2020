<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 기선언 변수 확인</title>
</head>
<body>
    <?php 
        // 서버 환경과 요청 클라이언트 정보 등을 출력한다.   
        /*
            php.ini의 register_globals가 OFF인 경우는 아래와 같이 출력한다.
        */

        echo "서버 이름 : {$_SERVER['SERVER_NAME']} <br>";
        echo "유저 에이전트 정보 : {$_SERVER['HTTP_USER_AGENT']} <br>";
        echo "현재 사용자 IP주소 : {$_SERVER['REMOTE_ADDR']} <br>";
        echo "사용자의 포트 접속 정보 : {$_SERVER['REMOTE_PORT']} <br>";
        echo "ACCEPT 헤더 정보 : {$_SERVER['HTTP_ACCEPT']} <br>";
        echo "요청 URL : {$_SERVER['REQUEST_URI']} <br>";
    ?>

</body>
</html>