<?php

// HTML出力用の変数 $view を宣言
 $view = "";

if(isset($_GET["id"])){
	$id = $_GET["id"];
//echo "id".$id;
	$db_set = "WHERE s_id=".$id;
//echo $db_set;
}elseif(isset($_GET["date"])){
	$date = $_GET["date"];
//echo "date".$date;
	$db_set = "WHERE create_date BETWEEN '".$date." 00:00:00.000000'  AND '".$date." 23:59:59.000000' ";
//echo $db_set;
}else{
	$db_set = "ORDER BY create_date DESC";
//echo $db_set;
}

$db_set = "ORDER BY create_date";

//表示数
$set_n = 5;

if(isset($_GET["page"])){
	$page = intval($_GET["page"]);
	if($page == 1){
		$lo = " LIMIT " . $set_n;
	}else{
		$news_s = ($page - 1) * $set_n;
		$lo = " LIMIT " . $set_n . " OFFSET " . $news_s;
	}
}else{
	$page = 1;
	$news_s = ($page - 1) * $set_n;
	$lo = " LIMIT " . $set_n . " OFFSET " . $news_s;
}

$pdo = new PDO("mysql:host=localhost;dbname=cs_academy;charset=utf8", "root", "");
$sql = "SELECT * FROM s_news ".$db_set;
$stmt = $pdo->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
$count=$stmt->rowCount();
//$sql = "SELECT * FROM s_news ORDER BY news_id DESC LIMIT 5";
//echo $db_set;
$sql = "SELECT * FROM s_news ".$db_set.$lo;

$stmt = $pdo->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

//echo "<PRE style=\"text-align:left;\">";
//var_dump($results);
//echo "</PRE>";

$view .= "全ニュース記事数:".$count;

if ($count > $set_n){
	$n_page = (int) (intval($count) / intval($set_n));
	$a_page = $count % $set_n;
	if($a_page != 0){
	$n_page++;
	}
}

foreach($results as $row) {
//	var_dump($row);
//	echo "<span class=\"section-title-news text-center\">".mb_substr($row["create_date"],0,10)."</span>";
//	 $view = "</h2>";

	$view .= "<article class=\"news-detail\">";
	$view .= "<dl>";
	$view .= "<a href=\"news.php?id=".$row["s_id"]."\">";
	$view .= "<dd class=\"news-title\">".mb_substr($row["s_title"],0,25)."</dd>";
	$view .= "<dd>".mb_substr($row["s_detail"],0,80)."</dd>";
	$view .= "<div class=\"news_d\"><span>Date：</span>".$row["create_date"]."　<span>Author by</span> ".$row["author"]."</div>";
	$view .= "</a>";
	$view .= "</dl>";
	$view .= "</article>";

}

echo "<div class=\"page_l\">";
if ($page != 1) {
	$view .= "<a href=\"news_list.php?page=" . ($page - 1) . "\">前 <  </a>";
}

if ($n_page > 1) {
	echo "<span class=\"page_n\">";
	for($a=1;$a<=$n_page;$a++){
		if($a==$page){
			$view .= "<span class=\"page_e\">".$a."</span>";
		}else{
			$view .= "<span class=\"page_o\"><a href=\"news_list.php?page=".$a. "\">".$a."</a></span>";
		}
	}
	$view .= "</span>";
}

if ($page != $n_page) {
	$view .= "<a href=\"news_list.php?page=" . ($page + 1) . "\">  > 次</a>";
}
$view .= "</div>";

echo "<div class=\"l_news\">";
echo $view;
echo "</div>";

$pdo = null;

 ?>