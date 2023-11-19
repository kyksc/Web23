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