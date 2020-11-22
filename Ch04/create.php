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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        <?php
            print_title();
        ?>
    </title>
</head>
<body>
    <h1><a href="index.php">WEB</a></h1>
    <ol>
        <?php
           print_list();
        ?>
    </ol>

    <a href="create.php">create</a>
    <?php if(isset($_GET['id'])) { ?>
        <a href="update.php?id=<?php echo $_GET['id'] ?>">update</a>
    <?php } ?>
    
    <form action="create_process.php" method="post">
        <p>
            <input type="text" name="title" placeholder="title을 입력해 주세요.">
        </p>
        <p>
            <textarea name="description"></textarea>
        </p>
        <p>
            <input type="submit">
        </p>
    </form>


    <h2>
        <?php
           print_title();            
        ?>
    </h2>

    <?php
       print_description();  
    ?>   

</body>
</html>