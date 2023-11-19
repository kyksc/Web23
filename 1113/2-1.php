<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="main.css" type="text/css">
    <title>11주차 과제</title>
</head>
<body>
    <h3>문제 1번</h3>
    <hr>
    <ul>
        <?php
        $n = 5; // 행 수

// 증가 부분
        for ($i = 1; $i <= $n; $i++) {
           for ($j = 65; $j < 65 + $i; $j++) {
              echo chr($j) . " ";
          }
            echo "\n";
        }   

// 감소 부분
        for ($i = $n - 1; $i >= 1; $i--) {
            for ($j = 65; $j < 65 + $i; $j++) {
        
       
        echo chr($j) . " ";
            }
            echo "\n";
        }
        ?>
    </ul>
</body>
</html>