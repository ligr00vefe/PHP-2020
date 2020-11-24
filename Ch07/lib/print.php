<?php
    // basename() 함수
    // 입력 문자열에서 단순하게 작동하며 실제 파일 시스템이나 ".."와 같은 경로 구성 요소를 인식하지 못함.
    // 해당 디렉터리 외에 다른 경로 접근 불가.

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
            $contents = basename(htmlspecialchars(file_get_contents("data/".$_GET['id']))); 

            echo 
            nl2br($contents).'</br>';
        } else {
            echo "Hello, PHP".'</br>';
        }        
    }
    
?>