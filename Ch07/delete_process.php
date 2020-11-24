<?php 
    // 검색창으로 프로세스 접근 경로 확인
    // 검색창(F12) -> Network
    // Preserve log 체크(프로세스가 진행되는 과정을 기록해둠 - 데이터의 전송기록)

    // delete 키를 누르면 검색창 Name 란에 delete_process.php 페이지를 호출하는 것을 알 수 있고 
    // Header에 Request Method를 통해 GET방식 전송인지 POST전송 방식인지 알 수 있음
    // 하단 Form Data를 보면 주고 받는 데이터를 볼 수 있음(id를 주고 받음)

    // ※ 이때 id값을 index.php로 하고 (localhost:81/Ch07/index.php?id=index.php) 
    // delete키를 누르면 id값에 의해서 index.php 파일을 삭제할 수 있음.

    // 이러한 현상을 방지하기 위해 id값의 경로를 basename() 함수를 사용해 data폴더 내로 제한해둬야함.

    unlink('data/'.basename($_POST['id']));
    header('Location: /Ch07/index.php');
?>