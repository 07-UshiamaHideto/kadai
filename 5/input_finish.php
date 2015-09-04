<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
<link rel="stylesheet" href="css/sample.css">
</head>
<?php
$file = fopen("data/data.txt","a");	// ファイル読み込み
$name = $_POST["name"];
$age = $_POST["age"];
$sex = $_POST["sex"];
$eml = $_POST["eml"];
$inst2 = $_POST["inst2"];
$da = $_POST["date"];
$loc = $_POST["loc"];

$l_data = $da.",".$loc.",".$name.",".$age.",".$sex.",".$eml.",".$inst2;
flock($file, LOCK_EX);			// ファイルロック
fputs($file, $l_data. PHP_EOL);
flock($file, LOCK_UN);			// ファイルロック解除
fclose($file);
?>
<body>

<header>
<h1>アンケート完了</h1>
</header>

<main>
<h2>アンケートに参加ありがとうございました。</h1>
<div class="waku">
<div class="left">投稿時間</div><div class="right"><?=$da?></div>
<div class="left">投稿位置</div><div class="right"><?=$loc?></div>
<div class="left">名前</div><div class="right"><?=$name?></div>
<div class="left">年齢</div><div class="right"><?=$age?></div>
<div class="left">性別</div><div class="right"><?=$sex?></div>
<div class="left">e-mail</div><div class="right"><?=$eml?></div>
<div class="left">趣味</div><div class="right"><?=$inst2?></div>
</div>
</main>

<footer><small>Program Maker : Hideto Ushiama </small></footer>
</body>
</html>