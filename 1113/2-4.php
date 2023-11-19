<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="main.css" type="text/css">
    <title>11주차 과제</title>
</head>
<body>
    <h3>문제 4번</h3>
    <hr>
    <ul>
    <?php
$people = array(
    'Kim' => 'Seoul',
    'Lee' => 'Pusan, Daegu',
    'Choi' => 'Inchon',
    'Park' => 'Suwon, Daejon',
    'Jung' => 'Kwangju, Chunchon, Wonju'
);

// Choi 항목 삭제
unset($people['Choi']);

// 배열 내용 출력
foreach ($people as $name => $cities) {
    echo "$name: $cities\n";
}
?>
    </ul>
</body>
</html>