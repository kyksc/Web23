
<?php
function revsort(&$array) {
    // 배열을 오름차순으로 정렬
    $sortedArray = $array;
    sort($sortedArray);

    // 정렬된 배열을 뒤집어서 내림차순으로 만듦
    $array = array_reverse($sortedArray);
}

// 테스트를 위한 배열
$testArray = [5, 2, 8, 1, 3];

// revsort 함수를 사용하여 배열을 내림차순으로 정렬
revsort($testArray);

// 정렬된 배열 출력
echo "내림차순으로 정렬된 배열: ";
print_r($testArray);
echo "<br>";
// 원래 배열 출력
echo "원래 배열: ";
print_r($testArray);
?>