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
$gy = 0;$m = 0;$f = 0;
$inst1=0;$inst2=0;$inst3=0;$inst4=0;$inst5=0;
$ma="男性";
flock($fp, LOCK_SH);					//ファイルロック
while ($array = fgetcsv( $fp )) {		//ファイルを読み込む
	$num = count($array);				//行数カウント
	$gy = $gy+1;
	echo $gy.":　";
	for($i=0;$i<$num;$i++){
		echo $array[$i]."　";
		if($i==1){
			echo "<br>";
		}
		if($i==4){
			if($array[$i] == $ma){
				$m = $m+1 ;
			}else{
				$f = $f+1;
			}
		}
		if($i==6){
			if(preg_match("/スポーツ/",$array[$i])){
				++$inst1;
			}
			if(preg_match("/読書/",$array[$i])){
				++$inst2;
			}
			if(preg_match("/ゲーム/",$array[$i])){
				++$inst3;
			}
			if(preg_match("/映画鑑賞/",$array[$i])){
				++$inst4;
			}
			if(preg_match("/その他/",$array[$i])){
				++$inst5;
			}
		}
//		echo "<br>";
	}
	echo "<br>";
}
flock($fp, LOCK_UN);                      //ロック解除
fclose($fp);                              //ファイルを閉じる
?>
</div>
<div class="set1">
<div class="total_1">男女比　男性：<?=$m?>名　女性：<?=$f?>名　合計：<?=$gy?>名</div>
<div class="total_2">趣味比　スポーツ：<?=$inst1?>名　読書：<?=$inst2?>名　ゲーム：<?=$inst3?>名　映画鑑賞：<?=$inst4?>名　その他：<?=$inst5?>名</div>
</div>
</main>

<footer><small>Program Maker : Hideto Ushiama </small></footer>
</body>
</html>
