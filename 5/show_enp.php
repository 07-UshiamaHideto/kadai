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
$per_m=0;$per_f=0;$per_t1=0;$per_t2=0;$per_t3=0;$per_t4=0;$per_t5=0;
$ma="男性";
flock($fp, LOCK_SH);					//ファイルロック
while ($array = fgetcsv( $fp )) {		//ファイルを読み込む
	$num = count($array);				//行数カウント
	$gy = $gy+1;
	echo $gy.":　";
	for($i=0;$i<$num;$i++){
		if($i==0){
			echo "投稿日時：";
		}
		if($i==1){
			echo "位置：";
		}

		echo $array[$i]."　";
		if($i==1){
			echo "<div class=\"re_l\">";
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
	echo "</div>";
}
	$per_m = round(($m / $gy) * 100, 1); $per_f = round(($f / $gy) * 100, 1);
	$per_t1 = round(($inst1 / $gy) * 100, 1);$per_t2 = round(($inst2 / $gy) * 100, 1);$per_t3 = round(($inst3 / $gy) * 100, 1);$per_t4 = round(($inst4 / $gy) * 100, 1);$per_t5 = round(($inst5 / $gy) * 100, 1);
flock($fp, LOCK_UN);                      //ロック解除
fclose($fp);                              //ファイルを閉じる
?>
</div>
<div class="set1">
<div class="total_1">男女比</div>
<div class="total_2">男性：<?=$m?>名(<?=$per_m?>％)　女性：<?=$f?>名(<?=$per_f?>％)　合計：<?=$gy?>名</div>
<div class="total_1">趣味比</div>
<div class="total_2">スポーツ：<?=$inst1?>名(<?=$per_t1?>％)　読書：<?=$inst2?>名(<?=$per_t2?>％)　ゲーム：<?=$inst3?>名(<?=$per_t3?>％)　映画鑑賞：<?=$inst4?>名(<?=$per_t4?>％)　その他：<?=$inst5?>名(<?=$per_t5?>％)</div>
</div>
</main>

<footer><small>Program Maker : Hideto Ushiama </small></footer>
</body>
</html>
