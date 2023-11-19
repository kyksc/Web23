<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="main.css" type="text/css">
    <title>11주차 과제</title>
</head>
<body>
    <h3>문제 2번</h3>
    <hr>
    <ul>
    <?php
function revsort(&$array) {
   
    sort($array);

  
    $array = array_reverse($array);
}

//테스트
$testArray = array(5, 2, 8, 1, 3);


revsort($testArray);


print_r($testArray);
?>
    </ul>
</body>
</html>