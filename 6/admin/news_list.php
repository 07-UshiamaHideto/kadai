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
<h1>チーズアカデミー<span>お知らせ・更新情報 ニュース一覧</span></h1>
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

<div class="list_a">
<form action="news_list.php" method="post">
<select  name="sl1"><option>ID順</option><option>日時順</option></select><select  name="sl2"><option>降順</option><option>昇順</option></select>
<input type="submit" value="更新" />
</form>
</div>

<?php

if(isset($_POST["sl1"]) | isset($_POST["sl2"])){
$j1 = $_POST["sl1"];
$j2 = $_POST["sl2"];

//echo "順序：".$j1.$j2;
if($j1=="ID順"){
	$db_set = "WHERE news_id";
}else{
	$db_set = "ORDER BY create_date";
}
if($j2=="降順"){
	$db_set = $db_set." DESC";
}else{}

}else{
$db_set = "ORDER BY create_date DESC";
}
//echo "db_set：".$db_set;
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
}
$pdo = null;
?>


</div>

<?php include("footer.php"); ?>
</body>
</html>