<?php
    // get 방식으로 파라미터 값 받기
    //$_GET['title'];
    
    // get 방식으로 출력하기
    // echo '<p>title: '.$_GET['title'].'</p>';
    // echo '<p>description: '.$_GET['description'].'</p>';

    // post 방식으로 파일 만들기
    file_put_contents('data/'.$_POST['title'], $_POST['description']);
?>