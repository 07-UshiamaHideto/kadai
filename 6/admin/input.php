<?php include("login_j.php"); ?>
<?php
 $h_title="チーズアカデミー　｜　新規登録";
 include("head.php");
 $da = date("Y-m-j");
 $ta = date("H:i:s");
 ?>
</head>
<body>

<header>
<h1>チーズアカデミー<span>お知らせ・更新情報 新規登録</span></h1>
</header>

<div class="main">
<?php echo $lo ?>

<div class="search_a">
<ul>
<li><a href="index.php">index</a></li>
<li><a href="input.php">ニュース新規追加</a></li>
<li><a href="news_list.php">ニュース一覧</a></li>
</ul>
<form action="search.php" method="post">
<span class="serach_t">News Search : </span><input type="text" name="search" /><input type="submit" value="SEARCH" />
</form>
</div>

<div class="form_a">
<form action="input_execute.php" method="post">
	title： <input type="text" name="title" value="" />
	　author： <input type="text" name="author" value="" size="15" /><br>
	category： <input type="checkbox" name="category[]" value="News" />News <input type="checkbox" name="category[]" value="Exam" />Exam <input type="checkbox" name="category[]" value="Column" />Column<input type="checkbox" name="category[]" value="Other" />Other<br>
	detail： <br><textarea type="text" name="detail" cols="60" rows="15" /></textarea><br>
	show： <select  name="flg"><option>公開</option selected><option>下書き</option></select>
	　create date： <input type="text" name="date" value="<?php echo $da ?>" size="10"/> <input type="text" name="time" value="<?php echo $ta ?>" size="10"/><br>
	<input type="submit" value="登録する"/>
</form>
</div>

</div>

<?php include("footer.php"); ?>
</body>
</html>