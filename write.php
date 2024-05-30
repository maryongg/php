<?php
ini_set('display_errors',1);

$name = $_POST["name"];
$age  = $_POST["age"]; 
if($name == ""){
    $name = "未入力";
}
if($age == ""){
    $age = "未入力";
}
$c   = ",";
$str = $name.$c.$age;

$file = fopen("data.csv","a");
fwrite($file,$str."\n");
fclose($file);

// header("Location: post.php");
// exit;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File書き込み</title>
</head>
<body>
名前：<?php echo $name;?> <br>
年齢：<?php echo $age;?> <br>
登録しました！ <br>
<a href="read.php">read.phpへ！</a>
</body>
</html>