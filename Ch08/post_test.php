<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP POST 테스트 페이지</title>
</head>
<body>
    <form action="post_test_result.php" method="POST">
        이름 입력: <input type="text" name="name">
        전화번호 입력: <input type="text" name="phone">
        <input type="submit" value="확인">
    </form>
</body>
</html>