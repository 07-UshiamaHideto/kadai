<?php include("login_j.php"); ?>

<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
<?php echo $lo ?>
<ul>
<li><a href="input.php">ニュース新規追加</a></li>
<li><a href="news_list.php">ニュース一覧（更新はここから）</a></li>
<li><a href="search_ps.php">ニュース検索</a></li>
</ul>

<div class="search_a">
<form action="search.php" method="post">
<span class="serach_t">News Search:</span><input type="text" name="search" /><input type="submit" value="SEARCH" />
</div>

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
	echo "<dl class=\"clearfix\">";
	echo "<a href=\"update.php?id=".$row["news_id"]."\">";
	echo "<dd class=\"news-title\">".mb_substr($row["news_title"],0,15)."</dd>";
	echo "<dd>".mb_substr($row["news_detail"],0,25)."</dd>";
	echo "<span class=\"section-title-news text-center\">".$row["create_date"]." author by ".$row["author"]."</span>";
	echo "</a>";
	echo "</dl>";
	echo "</article>";
	$num=$num+1;

}
echo "<div class=\"search_n\">｢".$se."｣検索件数：".$num."</div>";

$pdo = null;

}

?>

</body>
</html>