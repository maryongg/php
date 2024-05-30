<!DOCTYPE html>
<html lang="en">
<?php
// // ファイルを変数に格納
// $filename = 'data.csv';
 
// // fopenでファイルを開く（'r'は読み込みモードで開く）
// $fp = fopen($filename, 'r');
 
// // fgetsでファイルを読み込み、変数に格納
// $txt = fgets($fp);
 
// // ファイルを読み込んだ変数を出力
// echo $txt.'<br>';


// ファイルを変数に格納
$filename = 'data.csv';
 
// fopenでファイルを開く（'r'は読み込みモードで開く）
$fp = fopen($filename, 'r');
 
while (!feof($fp)) {
 
// fgetsでファイルを読み込み、変数に格納
$txt = fgets($fp);
 
// ファイルを読み込んだ変数を出力
echo $txt.'<br>';
}
fclose($fp);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ファイル表示</title>
</head>
<body>
名前：<?=$name?><br>
年齢：<?=$age?>
</body>
</html>