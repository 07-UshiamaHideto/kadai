<?php
$ca1 = "";$ca2 = "";$ca3 = "";$ca4 = "";
$flg1 = "";$flg2 = "";

if(isset($_GET["id"])){
	$id = $_GET["id"];
//	echo "id".$id;
	$db_set = "WHERE news_id=".$id;
//	echo $db_set;

	$pdo = new PDO("mysql:host=localhost;dbname=cs_academy;charset=utf8", "root", "");
	$sql = "SELECT * FROM news ".$db_set;

	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

	foreach($results as $row) {
//	echo "<PRE style=\"text-align:left;\">";var_dump($row); echo "</PRE>";

		$id = $row["news_id"];
		$title = $row["news_title"];
		$detail = $row["news_detail"];
		$author = $row["author"];
//	echo "p1:".$id.$title.$detail;

		if($row["show_flg"]==1){
			$flg1 = " selected";
		}else{
			$flg2 = " selected";
		}
//	echo "p2:".$flg1.$flg2;

		$dt = explode(" ", $row["create_date"]);
		$date = $dt[0];$time = $dt[1];
//	echo "p3:".$date. $time;

		$cate = $row["category"];
		if(strstr($cate, 'News')) {
			$ca1 = " checked";
		}
		if(strstr($cate, 'Exam')) {
			$ca2 = " checked";
		}
		if(strstr($cate, 'Column')) {
			$ca3 = " checked";
		}
		if(strstr($cate, 'Other')) {
			$ca4 = " checked";
		}
//	echo "p4:".$ca1.$ca2.$ca3.$ca4;

	}
	$pdo = null;

}
?>

<html>
<head>
</head>
<body>
<header class="header">
ニュースの更新<br>
<form action="update_execute.php" method="post">
	title <input type="text" name="title" value="<?php echo $title ?>" /><br>
	category: <input type="checkbox" name="category[]" value="News" <?php echo $ca1 ?>/>News <input type="checkbox" name="category[]" value="Exam" <?php echo $ca2 ?>/>Exam <input type="checkbox" name="category[]" value="Column" <?php echo $ca3 ?>/>Column<input type="checkbox" name="category[]" value="Other" <?php echo $ca4 ?>/>Other<br>
	show: <select  name="flg"><option>公開</option<?php echo $flg1 ?>><option>下書き</option<?php echo $flg2 ?>></select>
	author: <input type="text" name="author" value="<?php echo $author ?>" size="15" /><br>
	detail: <br><textarea type="text" name="detail" cols="60" rows="15" /><?php echo $detail ?></textarea><br>
	create date: <input type="text" name="date" value="<?php echo $date ?>" size="10"/> <input type="text" name="time" value="<?php echo $time ?>" size="10"/><br>
	<input type="hidden" name="id" value="<?php echo $id ?>" />
	<input type="submit" />
</form>
</body>
</html>