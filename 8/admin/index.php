<?php include("login_j.php");
 $h_title="Moter Sport News　｜　管理ページ";
 include("head.php");
 ?>
</head>
<body>

<header>
<h1>Moter Sport News<span>お知らせ・更新情報 管理画面</span></h1>
</header>

<div class="main">
<?php echo $lo ?>
<ul>
<li><a href="input.php">ニュース新規追加</a></li>
<li><a href="news_list.php">ニュース一覧（更新はここから）</a></li>
</ul>
<div class="search_a">
<form action="search.php" method="post">
<span class="serach_t">News Search : </span><input type="text" name="search" /><input type="submit" value="SEARCH" />
</form>
</div>
</div>

<?php include("footer.php"); ?>
</body>
</html>