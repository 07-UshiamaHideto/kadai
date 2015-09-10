<?php

//echo "aaaa";
$pdo = new PDO("mysql:host=localhost;dbname=cs_academy;charset=utf8", "root", "");
$sql = "SELECT * FROM news ORDER BY news_id DESC LIMIT 5";
//$sql = "SELECT * FROM enq";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
//var_dump($results);
foreach($results as $row) {
//	var_dump($row);
	echo "<dt class=\"news-date\"><a href=\"news.php?date=".mb_substr($row["create_date"],0,10)."\">".mb_substr($row["create_date"],0,10)."</a></dt>";

	echo "<dd class=\"news-description\"><a href=\"news.php?id=".$row["news_id"]."\">".mb_substr($row["news_title"],0,10)."</a></dd>";
}
$pdo = null;
?>
