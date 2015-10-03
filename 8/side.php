<?php

// HTML出力用の変数 $view を宣言
 $view = "";

 $db_set = "ORDER BY c_id";

$pdo = new PDO("mysql:host=localhost;dbname=cs_academy;charset=utf8", "root", "");

$sql = "SELECT * FROM s_category ".$db_set;
$stmt = $pdo->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
//$pdo = null;

$sql = "SELECT * FROM s_sche WHERE s_date > now() ORDER BY  s_date ASC LIMIT 5";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$results1 = $stmt->fetchAll(PDO::FETCH_ASSOC);
//$pdo = null;

$sql = "SELECT * FROM s_sche WHERE e_date < now() ORDER BY  s_date ASC LIMIT 5";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$results2 = $stmt->fetchAll(PDO::FETCH_ASSOC);
//$pdo = null;

function sche($results1,$view){
//var_dump($results1);

foreach($results1 as $row) {

	$view .= " <a href=\"news.php?sch=".$row["sc_id"]."\">".$row["ev_name"]."</a><br> ";

}

$pdo = null;

echo "<div class=\"cate_s\">";
echo "<div class=\"cate_t\">スケジュール</div>";
echo $view;
echo "</div>";

}

function result($results2,$view){
//var_dump($results2);

foreach($results2 as $row) {

	$view .= " <a href=\"news.php?res=".$row["sc_id"]."\">".$row["ev_name"]."</a><br> ";

}

$pdo = null;

echo "<div class=\"cate_s\">";
echo "<div class=\"cate_t\">結果</div>";
echo $view;
echo "</div>";

}


function catego($results,$view){

foreach($results as $row) {

	$view .= " <a href=\"news.php?cate=".$row["c_id"]."\">".$row["ca_name"]."</a> ";

}

$pdo = null;

echo "<div class=\"cate_s\">";
echo "<div class=\"cate_t\">カテゴリー</div>";
echo $view;
echo "</div>";

}

?>