<?php
$filename = 'client.txt';

// 파일 열기
$file = fopen($filename, 'r');

if ($file) {
    // 파일 라인 별로 읽기
    while (!feof($file)) {
        $line = fgets($file);

        // 탭으로 구분된 값 분리
        $data = explode("\t", $line);

        // 나이가 30세 이상인 경우 출력
        if (isset($data[1]) && intval($data[1]) >= 30) {
            echo "이름: $data[0], 나이: $data[1], 성별: $data[2], 이메일: $data[3]\n";
            echo "<br>";
        }
    }

    // 파일 닫기
    fclose($file);
} else {
    echo "파일을 열 수 없습니다.";
}
?>