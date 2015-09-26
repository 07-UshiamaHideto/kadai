<?php
// php include("login_j.php"); 
 $h_title="Motersport News　｜　カテゴリ登録";
 include("head.php");
 $da = date("Y-m-j");
 $ta = date("H:i:s");

 ?>
</head>
<body>

<header>
<h1>Motersport News<span>カテゴリ 新規登録</span></h1>
</header>

<div class="main">

<div class="search_a">
<ul>
<li><a href="index.php">index</a></li>
<li><a href="input.php">ニュース新規追加</a></li>
<li><a href="news_list.php">ニュース一覧</a></li>
</ul>
<!--   form action="search.php" method="post">
<span class="serach_t">News Search : </span><input type="text" name="search" /><input type="submit" value="SEARCH" />
</form  -->
</div>

<div class="form_a">
<form action="s_input_execute.php" method="post">
	Category Name： <input type="text" name="ca_name" value="" /><br>
	outline： <br><textarea type="text" name="c_outline" cols="60" rows="10" /></textarea><br>
	show： <select  name="flg"><option>公開</option selected><option>下書き</option></select><br>
	<input type="submit" value="登録する"/>
</form>
</div>

</div>

<?php include("footer.php"); ?>
</body>
</html>