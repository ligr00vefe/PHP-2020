<?php
    // XSS(Cross Site Scripting)
    // 게시판이나 웹 메일 등에 자바 스크립트와 같은 스크립트 코드를
    // 삽입 해 개발자가 고려하지 않은 기능이 작동하게 하는 공격

    // 이용자의 요청 데이터를 받을 때 
    // htmlspecialchars() 함수나 strip_tags() 함수를 이용하여 대비할 수 있다.
    
    // htmlspecialchars() 함수
    // 문자열에서 특정한 특수 문자를 HTML 엔티티로 변환
    // '<'와 같은 특수문자를 &lt;(엔티티문자열)로 변환하기 때문에 <script>가 실행되지 않음

    // strip_tags() 함수
    // 문자열에서 HTML 태그와 PHP 태그 제거하는 함수
    // < > 안에서 실행되는 태그들을 삭제한다.

    function print_title(){
        if(isset($_GET['id'])) {
            echo htmlspecialchars($_GET['id']);
        } else {
            echo "Welcome";
        }
    }

    function print_list() {
        $list = scandir('data');        
        $i = 0;
            
        while($i < count($list)) {
            $title = htmlspecialchars($list[$i]);

            if($list[$i] != '.') {
                if($list[$i] != '..') {     
                    echo "<li><a href=\"index.php?id=$title\">$title</a></li>\n";    
                }
            }
            $i += 1;
        }
    }

    function print_description() {      
        if(isset($_GET['id'])) {
            $basename = htmlspecialchars(file_get_contents("data/".$_GET['id'])); 

            echo 
            nl2br($basename).'</br>';
        } else {
            echo "Hello, PHP".'</br>';
        }        
    }
    
?>