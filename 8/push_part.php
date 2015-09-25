<?php

// HTML出力用の変数 $view を宣言
 $view = "";

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
	$view .= "<dl class=\"p-des\">";
	$view .= "<dt><a href=\"news.php?id=".$row["s_id"]."\">".mb_substr($row["s_title"],0,25)."</a></dd>";
	$view .= "<dd><a href=\"news.php?id=".$row["s_id"]."\">".mb_substr($row["s_detail"],0,65)."</a></dd>";
	$view .= "<div class=\"p-date\"><a href=\"news.php?date=".mb_substr($row["create_date"],0,10)."\">".mb_substr($row["create_date"],0,10)."</a></div>";	$view .= "</dl>";
}
$pdo = null;

echo "<div class=\"p_news\">";
echo "<div class=\"p_title\">一押しニュース</div>";
echo $view;
echo "</div>";

?>
