<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <h2>Array</h2>
    <?php
        $coworkers = array('james', 'anna', 'max', 'tommy');
        echo '$coworkers의 두 번째 인자: '.$coworkers[1].'</br>';
        echo '$coworkers의 네 번째 인자: '.$coworkers[3].'</br></br>';
        echo '$coworkers의 갯수: ';
        var_dump(count($coworkers));
    ?>

    </br>
    </br>

    <?php
        array_push($coworkers, 'sam');
        echo 'array_push로 추가된 $coworkers의 다섯 번째 인자: '.$coworkers[4].'</br></br>';
        echo '$coworkers의 : 표현형과 인자 나열: '.'</br>';
        var_dump($coworkers);
    ?>
</body>
</html>