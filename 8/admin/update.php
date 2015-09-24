<?php
$ca1 = "";$ca2 = "";$ca3 = "";$ca4 = "";
$flg1 = "";$flg2 = "";

if(isset($_GET["id"])){
	$id = $_GET["id"];
//	echo "id".$id;
	$db_set = "WHERE news_id=".$id;
//	echo $db_set;

	$pdo = new PDO("mysql:host=localhost;dbname=cs_academy;charset=utf8", "root", "");
	$sql = "SELECT * FROM s_news ".$db_set;

	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

	foreach($results as $row) {
//	echo "<PRE style=\"text-align:left;\">";var_dump($row); echo "</PRE>";

		$id = $row["s_id"];
		$title = $row["s_title"];
		$detail = $row["s_detail"];
		$s_index = $row["s_outline"];
		$author = $row["author"];
//	echo "p1:".$id.$title.$detail;

		if($row["show_flg"]==1){
			$flg1 = " selected";
		}else{
			$flg2 = " selected";
		}

		if($row["s_index"]==1){
			$si1 = " selected";
		}else{
			$si2 = " selected";
		}
//	echo "p2:".$flg1.$flg2;

		$dt = explode(" ", $row["create_date"]);
		$date = $dt[0];$time = $dt[1];

		$sdt = explode(" ", $row["open_date"]);
		$date = $sdt[0];$time = $sdt[1];

		$edt = explode(" ", $row["close_date"]);
		$date = $edt[0];$time = $edt[1];

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
 include("login_j.php");

 $h_title="Motersport News　｜　更新登録";
 include("head.php");
 $da = date("Y-m-j");
 $ta = date("H:i:s");

 ?>
</head>
<body>

<header>
<h1>Motersport News<span>お知らせ・更新情報 更新登録</span></h1>
</header>

<div class="main">
<?php echo $lo ?>
<div class="search_a">
<ul>
<li><a href="index.php">index</a></li>
<li><a href="input.php">ニュース新規追加</a></li>
<li><a href="news_list.php">ニュース一覧</a></li>
</ul>
<form action="search.php" method="post">
<span class="serach_t">News Search : </span><input type="text" name="search" /><input type="submit" value="SEARCH" />
</form>
</div>

<div class="form_a">
<form action="update_execute.php" method="post">
	title： <input type="text" name="title" value="<?php echo $title ?>" />
	　author： <input type="text" name="author" value="<?php echo $author ?>" size="15" /><br>
	category： <input type="checkbox" name="category[]" value="News" <?php echo $ca1 ?>/>News <input type="checkbox" name="category[]" value="Exam" <?php echo $ca2 ?>/>Exam <input type="checkbox" name="category[]" value="Column" <?php echo $ca3 ?>/>Column<input type="checkbox" name="category[]" value="Other" <?php echo $ca4 ?>/>Other<br>
	detail： <br><textarea type="text" name="detail" cols="60" rows="15" /><?php echo $detail ?></textarea><br>
	show： <select  name="flg"><option>公開</option<?php echo $flg1 ?>><option>下書き</option<?php echo $flg2 ?>></select><br>
	show index： <select  name="index"><option>有</option selected<?php echo $si1 ?>><option>無</option<?php echo $si2 ?>></select><br>
	create date： <input type="text" name="date" value="<?php echo $date ?>" size="10"/> <input type="text" name="time" value="<?php echo $time ?>" size="10"/><br>
	show date： <input type="text" name="s_date" value="<?php echo $sda ?>" size="10"/> <input type="text" name="s_time" value="<?php echo $sta ?>" size="10"/><br>
	end date： <input type="text" name="e_date" value="<?php echo $eda ?>" size="10"/> <input type="text" name="e_time" value="23:59:59" size="10"/><br>>
	<input type="hidden" name="id" value="<?php echo $eta ?>" />
	<input type="submit" />
</form>
</div>

</div>

<?php include("footer.php"); ?>
</body>
</html>