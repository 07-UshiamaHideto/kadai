<?php

//echo "aaaa";
$pdo = new PDO("mysql:host=localhost;dbname=cs_academy;charset=utf8", "root", "");
$sql = "SELECT * FROM s_news WHERE `s_index` LIKE '1' LIMIT 2";
//$sql = "SELECT * FROM enq";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
//var_dump($results);
foreach($results as $row) {
//	var_dump($row);
	echo "<dt class=\"news-date\"><a href=\"news.php?date=".mb_substr($row["create_date"],0,10)."\">".mb_substr($row["create_date"],0,10)."</a></dt>";

	echo "<dd class=\"news-description\"><a href=\"news.php?id=".$row["s_id"]."\">".mb_substr($row["s_title"],0,25)."</a></dd>";
	echo "<dd class=\"news-detail\"><a href=\"news.php?id=".$row["s_id"]."\">".mb_substr($row["s_detail"],0,50)."</a></dd>";
}
$pdo = null;
?>
