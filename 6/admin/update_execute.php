<?php
$id = $_POST["id"];
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
$ca = $_REQUEST["category"];
$category ="";
	for($i=0; $i<sizeof($ca); $i++){
		$cate = $ca[$i]; $category = $category." ".$cate;
	}
$date = $da." ".$ti;

$pdo = new PDO("mysql:host=localhost;dbname=cs_academy;charset=utf8", "root", "");
$sql = "UPDATE news set news_title= '" . $title . "', news_detail = '" . $detail . "', show_flg = '" . $flg . "', author = '" . $author . "', create_date = CAST('". $date ."' AS DATETIME), update = sysdate()', category = '". $category. "' WHERE news_id = " . $id;
var_dump($sql);
$stmt = $pdo->prepare($sql);
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
ニュースを更新しました。<br>
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