<?php
$title = $_POST["title"];
$flg = $_POST["flg"];
 if ($flg == "公開"){
	$show_flg = 1;
 }else{
	$show_flg = 0;
 }
$author = $_POST["author"];
$detail = $_POST["detail"];
$da = $_POST["date"];
$ti = $_POST["time"];
$date = $da." ".$ti;


$ca = $_REQUEST["category"];
 $category ="";
 for($i=0; $i<sizeof($ca); $i++){
 $cate = $ca[$i]; $category = $category." ".$cate;
 }


$pdo = new PDO("mysql:host=localhost;dbname=cs_academy;charset=utf8", "root", "");
$sql = "INSERT INTO enq (news_id, news_title, news_detail, show_flg, author, create_date, update, category) VALUES (NULL, :title, :detail, :flg, :author, CAST('$date' AS DATETIME), sysdate(), :cate) ";
var_dump($sql);
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':title', $title, PDO::PARAM_STR);
$stmt->bindValue(':detail', $detail, PDO::PARAM_STR);
$stmt->bindValue(':flg', $show_flg, PDO::PARAM_INT);
$stmt->bindValue(':author', $author, PDO::PARAM_STR);
$stmt->bindValue(':cate', $category, PDO::PARAM_STR);
$result = $stmt->execute();
var_dump($result);
if($result) {
	echo "データが登録できました";
	echo "<a href=select.php>一覧へ</a>";
} else {
	echo "データの登録に失敗しました";
}
$pdo = null;

?>
<html>
<head>
</head>
<body>
<br>"
<?php
echo "title:".$title."<br>";
echo "show_flg:".$show_flg."<br>";
echo "author:".$author."<br>";
echo "detail:".$detail."<br>";
echo "date:".$date."<br>";
//echo "time:".$time."<br>";
echo "category:".$category."<br>";

?>
</body>
</html>