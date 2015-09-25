<?php

// HTMLo—Í—p‚Ì•Ï” $view ‚ðéŒ¾
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

$pdo = new PDO("mysql:host=localhost;dbname=cs_academy;charset=utf8", "root", "");
//$sql = "SELECT * FROM s_news ORDER BY news_id DESC LIMIT 5";
//echo $db_set;
$sql = "SELECT * FROM s_news ".$db_set;

$stmt = $pdo->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

//echo "<PRE style=\"text-align:left;\">";
//var_dump($results);
//echo "</PRE>";

foreach($results as $row) {
//	var_dump($row);
//	echo "<span class=\"section-title-news text-center\">".mb_substr($row["create_date"],0,10)."</span>";
//	 $view = "</h2>";

	 $view .= "<article class=\"news-detail\">";
	 $view .= "<dl class=\"clearfix\">";
	 $view .= "<dd class=\"news-title\">".$row["s_title"]."</dd>";
	 $view .= "<dd>".$row["s_detail"]."</dd>";
	 $view .= "<span class=\"section-title-news text-center\">".$row["create_date"]." author by ".$row["author"]."</span>";
	 $view .= "</dl>";
	 $view .= "</article>";

}

echo "<div class=\"l_news\">";
echo $view;
echo "</div>";

$pdo = null;

 ?>