<?php

// HTML出力用の変数 $view を宣言
 $view = "";

//echo "aaaa";
$pdo = new PDO("mysql:host=localhost;dbname=cs_academy;charset=utf8", "root", "");
//$sql = "SELECT * FROM s_news ORDER BY create_date DESC LIMIT 5 ";
$sql = "SELECT * FROM s_news WHERE show_flg = 1 ORDER BY create_date DESC LIMIT 5 ";
//$sql = "SELECT * FROM enq";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
//var_dump($results);
foreach($results as $row) {
//	var_dump($row);
	$view .= "<dt class=\"news-date\"><a href=\"news.php?date=".mb_substr($row["create_date"],0,10)."\">".mb_substr($row["create_date"],0,10)."</a></dt>";

	$view .= "<dd class=\"news-description\"><a href=\"news.php?id=".$row["s_id"]."\">".mb_substr($row["s_title"],0,25)."</a></dd>";
}
$pdo = null;


echo "<div class=\"l_news\">";
echo "<div class=\"l_title\">ニュース一覧(最新5件)</div>";
echo $view;
echo "<div class=\"all_news\"><a href=\"news_list.php\">－ ニュース一覧 －</a></div>";
echo "</div>";

?>
