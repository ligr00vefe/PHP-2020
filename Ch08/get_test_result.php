<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP POST 결과 페이지</title>
</head>
<body>
    <?php 
        $name = $_GET["name"];
        $phone = $_GET["phone"];
        echo "1. 성함: $name <br>";
        echo "2. 전화번호: $phone <br>";
    ?>

</body>
</html>