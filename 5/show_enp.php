<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
<link rel="stylesheet" href="css/sample.css">
</head>
<body>

<header>
<h1>入力内容の確認</h1>
</header>

<main>

<div class="result">
<?php
$fp = fopen("data/data.txt", "r");		//ファイルを開く
$gy = 0;
flock($fp, LOCK_SH);					//ファイルロック
while ($array = fgetcsv( $fp )) {		//ファイルを読み込む
	$num = count($array);				//行数カウント
	$gy = $gy+1;
	echo $gy.":　";
	for($i=0;$i<$num;$i++){
		echo $array[$i];
//		echo "<br>";
	}
	echo "<br>";
}
flock($fp, LOCK_UN);                      //ロック解除
fclose($fp);                              //ファイルを閉じる
?>
</div>

</main>

<footer><small>Program Maker : Hideto Ushiama </small></footer>
</body>
</html>
