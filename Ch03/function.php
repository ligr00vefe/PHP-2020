<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Function</title>
</head>
<body>
    <h1>Function</h1>
    <h2>Basic</h2>

    <?php
        function basic() {
            print("Lorem ipsum dolor1</br>");
            print("Lorem ipsum dolor2</br></br>");
        }

        basic();
        basic();
    ?>

    </br>
    </br>
    
    <h2>Parameter &amp; Argument</h2>
    <?php
        function sum($left, $right) {
            print($left+$right);
            print("</br>");
        }

        sum(2, 4);
        sum(10, 21);
    ?>

    </br>
    </br>

    <h2>return값 출력</h2>
    <?php
        function sum2($left, $right) {
            return $left+$right;
        }

        print(sum2(76, 23));
        file_put_contents('result.txt', sum2(23, 54));
    ?>

</body>
</html>