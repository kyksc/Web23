<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="main.css" type="text/css">
    <title>11주차 과제</title>
</head>
<body>
    <h3>문제 3번</h3>
    <hr>
    <ul>
    <?php
$filename = 'exam.txt';

// 파일 열기
$file = fopen($filename, 'r');

if ($file) {
    $lineCount = 0;
    $wordCount = 0;
    $charCount = 0;

    // 파일 라인 별로 읽기
    while (!feof($file)) {
        $line = fgets($file);
        $lineCount++;

        // 단어 수 및 글자 수 계산
        $wordCount += str_word_count($line);
        $charCount += strlen($line);
    }

    // 파일 닫기
    fclose($file);

    // 결과 출력
    echo "줄 수: $lineCount\n";
    echo "단어 수: $wordCount\n";
    echo "글자 수: $charCount\n";
} else {
    echo "파일을 열 수 없습니다.";
}
?>
    </ul>
</body>
</html>