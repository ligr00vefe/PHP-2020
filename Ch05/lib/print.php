<?php
    function print_title(){
        if(isset($_GET['id'])) {
            echo $_GET['id'];
        } else {
            echo "Welcome";
        }
    }

    function print_list() {
        $list = scandir('data');
        $i = 0;
            
        while($i < count($list)) {
            if($list[$i] != '.') {
                if($list[$i] != '..') {     
                    echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>\n";    
                }
            }
            $i += 1;
        }
    }

    function print_description() {      
        if(isset($_GET['id'])) {
            $contents = file_get_contents("data/".$_GET['id']); 

            echo 
            nl2br($contents).'</br>';
        } else {
            echo "Hello, PHP".'</br>';
        }        
    }
    
?>