<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
<link rel="stylesheet" href="css/sample.css">
</head>
<?php
$name = $_POST["name"];
$age = $_POST["age"];
$sex = $_POST["sex"];
$eml = $_POST["eml"];
$checkbox = $_REQUEST["tas"];
 $inst2 ="";
 for($i=0; $i<sizeof($checkbox); $i++){
 $inst = $checkbox[$i]; $inst2 = $inst2." ". $inst;}
?>
<body>

<header>
<h1>入力内容の確認</h1>
</header>

<main>
<div class="waku">
<div class="left">名前</div><div class="right"><?=$name?></div>
<div class="left">年齢</div><div class="right"><?=$age?></div>
<div class="left">性別</div><div class="right"><?=$sex?></div>
<div class="left">e-mail</div><div class="right"><?=$eml?></div>
<div class="left">趣味</div><div class="right"><?=$inst?></div>
</div>
<form action="input_finish.php" method="post">
<input type="hidden" name="name" value="<?=$name?>" />
<input type="hidden" name="age" value="<?=$age?>" />
<input type="hidden" name="sex" value="<?=$sex?>" />
<input type="hidden" name="eml" value="<?=$eml?>" />
<input type="hidden" name="inst2" value="<?=$inst2?>" />
<div class="sub1">
<input type="submit" value="アンケート内容を送信" />
</form>
</div>
</main>

<footer><small>Program Maker : Hideto Ushiama </small></footer>
</body>
</html>