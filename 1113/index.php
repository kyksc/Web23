<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="main.css" type="text/css">
    <title>웹 프로그래밍 과제</title>
</head>
<body>
    <h3>웹 프로그래밍 과제</h3>
    <hr>
    <ul>
        <?php
       
        $links = [
            "/1.php" => "10주차 1번",
            "/2.php" => "10주차 2번",
            "/3.php" => "10주차 3번",
            "/2-1.php" => "11주차 1번",
            "/2-2.php" => "11주차 2번",
            "/2-3.php" => "11주차 3번",
            "/2-4.php" => "11주차 4번",
            "/2-5.php" => "11주차 5번"
        ];

      
        foreach ($links as $url => $name) {
            echo "<li><h4><a href=\"$url\">$name</a></h4></li>";
        }
        ?>
    </ul>
</body>
</html>