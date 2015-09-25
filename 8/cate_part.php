<?php

// HTML出力用の変数 $view を宣言
 $view = "";

 $db_set = "ORDER BY c_id";

$pdo = new PDO("mysql:host=localhost;dbname=cs_academy;charset=utf8", "root", "");
$sql = "SELECT * FROM s_category ".$db_set;

$stmt = $pdo->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
//var_dump($results);

foreach($results as $row) {

	$view .= " <a href=\"news.php?cate=".$row["c_id"]."\">".$row["ca_name"]."</a> ";

}

$pdo = null;

echo "<div class=\"cate_s\">";
echo "<div class=\"cate_t\">カテゴリー</div>";
echo $view;
echo "</div>";

?>