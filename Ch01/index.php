<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WEB</title>
</head>
<body>
    <h1><a href="index.php">WEB</a></h1>
    <!-- 
    <ol>
        <li><a href="index.php?id=HTML">HTML</a></li>
        <li><a href="index.php?id=CSS">CSS</a></li>
        <li><a href="index.php?id=JavaScript">JavaScript</a></li>
    </ol> 
    -->
    <ol>
        <?php
            $list = scandir('data');
            $i = 0;
            
            while($i < count($list)) {
                if($list[$i] != '.') {
                    if($list[$i] != '..') {
        ?>
                    <li><a href="index.php?id=<?=$list[$i]?>"><?=$list[$i]?></a></li>
        <?php               
                    }
                }
                $i = $i + 1;
            }
        ?>
    </ol>

    <h2>
        <?php
            if(isset($_GET['id'])) {
                echo $_GET['id'];
            } else {
                echo "Welcome";
            }
            
        ?>
    </h2>
    <?php       
        if(isset($_GET['id'])) {
            echo file_get_contents("data/".$_GET['id']); 
        } else {
            echo "Hello, PHP".'</br>';
        }        
    ?>   

    </br>
    </br>

    <h2>배열로 파일/디렉터리명 담기</h2>
    <?php
        
        $list = scandir('./data');
        var_dump($list);
    ?>
</body>
</html>