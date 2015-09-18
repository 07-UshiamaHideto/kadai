<?php include("login_j.php"); ?>
<?php
 $h_title="チーズアカデミー　｜　ニュース検索";
 include("head.php");
 $da = date("Y-m-j");
 $ta = date("H:i:s");
 ?>
</head>
<body>

<header>
<h1>チーズアカデミー<span>お知らせ・更新情報 ニュース検索</span></h1>
</header>

<div class="main">
<?php echo $lo ?>

<div class="search_a">
<ul>
<li><a href="index.php">index</a></li>
<li><a href="input.php">ニュース新規追加</a></li>
</ul>
<form action="search.php" method="post">
<span class="serach_t">News Search : </span><input type="text" name="search" /><input type="submit" value="SEARCH" />
</form>
</div>

<h2>ニュース一覧</h2>

<?php

if($_POST["search"] ==""){

	echo "<div class=\"text_n\">入力ありません。</div>";

}elseif(isset($_POST["search"])){

	$se = $_POST["search"];
	$num = 0;
	//echo "id".$id;
	$db_set = "WHERE `news_title` LIKE '%".$se."%' OR `news_detail` LIKE '%".$se."%'";
	//echo $db_set;

	$pdo = new PDO("mysql:host=localhost;dbname=cs_academy;charset=utf8", "root", "");
	//$sql = "SELECT * FROM news ORDER BY news_id DESC LIMIT 5";
	$sql = "SELECT * FROM news ".$db_set;

	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

	//echo "<PRE style=\"text-align:left;\">";
	//var_dump($results);
	//echo "</PRE>";

	foreach($results as $row) {
	//	var_dump($row);
	//	echo "<span class=\"section-title-news text-center\">".mb_substr($row["create_date"],0,10)."</span>";


		echo "<article class=\"news-detail\">";
		echo "<dl>";
		echo "<a href=\"update.php?id=".$row["news_id"]."\">";
		echo "<dd class=\"news-title\"><span>ID：</span>".$row["news_id"]."<span>　Title：</span>".mb_substr($row["news_title"],0,15)."</dd>";
		echo "<dd><span>Detail：</span>".mb_substr($row["news_detail"],0,30)."</dd>";
		echo "<div class=\"news_d\"><span>Date：</span>".$row["create_date"]."　<span>Author by</span> ".$row["author"]."</div>";
		echo "</a>";
		echo "</dl>";
		echo "</article>";
		$num=$num+1;
	}


}
echo "<div class=\"search_n\">｢".$se."｣検索件数：".$num."</div>";

$pdo = null;

?>


</div>

<?php include("footer.php"); ?>
</body>
</html>