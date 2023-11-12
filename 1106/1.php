<?php
function printNextNumber($a) {
    if ($a % 2 == 1) {
        // 홀수인 경우
        echo $a + 1;
    } else {
        // 짝수인 경우
        echo $a;
    }
}

// 테스트
$a = 7;
printNextNumber($a);
?>