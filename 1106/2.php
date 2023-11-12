<?php
function factorial($n) {
    $result = 1;
    while ($n > 1) {
        $result *= $n;
        $n--;
    }
    return $result;
}

// 테스트
$number = 5;
echo "Factorial of $number is " . factorial($number);
?>