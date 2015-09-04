<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
<link rel="stylesheet" href="css/sample.css">
<script>

</script>
</head>
<body>

<header>
<h1>アンケート入力</h1>
</header>

<main>
<h2>アンケートにご協力ください。</h2>

<form action="confirm_enq.php" method="post">
<div class="a_form">
	<div class="a_left">名前: </div><div class="a_right"><input type="text" name="name" /></div>
	<div class="a_left">年齢: </div><div class="a_right"><input type="text" name="age" /></div>
	<div class="a_left">e-mail: </div><div class="a_right"><input type="text" name="eml" /></div>
	<div class="a_left">性別： </div><div class="a_right"><input type="radio" name="sex" value="男性">男性<input type="radio" name="sex" value="女性">女性</div>

	<div class="a_left">趣味： </div><div class="a_right"><input type="checkbox" name="tas[]" value="スポーツ">スポーツ<input type="checkbox" name="tas[]" value="読書">読書<input type="checkbox" name="tas[]" value="ゲーム">ゲーム<input type="checkbox" name="tas[]" value="映画鑑賞">映画鑑賞<input type="checkbox" name="tas[]" value="その他">その他</div>
</div>
	<div class="sub2">
	<input type="submit" value="入力内容を確認する" />
	</div>
</form>
</div>
<!-- 位置、投稿時間 -->

</main>

<footer><small>Program Maker : Hideto Ushiama </small></footer>
</body>
</html>