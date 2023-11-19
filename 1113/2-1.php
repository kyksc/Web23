<?php
$n = 5; // 행 수

// 증가 부분
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo chr(64 + $j) . "&nbsp;";
    }
    echo "<br>";
}

// 하단 삼각형 출력
for ($i = 4; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo chr(64 + $j) . "&nbsp;";
    }
    echo "<br>";
}
?>