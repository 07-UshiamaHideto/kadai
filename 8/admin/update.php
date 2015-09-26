<?php
// HTML出力用の変数 $view を宣言
 $view = "";
 $s_flg = "";
 $i_flg = "";

if(isset($_GET["id"])){
	$id = $_GET["id"];
//	echo "id".$id;
	$db_set = "WHERE s_id=".$id;
//	echo $db_set;

	$pdo = new PDO("mysql:host=localhost;dbname=cs_academy;charset=utf8", "root", "");
	$sql = "SELECT * FROM s_news ".$db_set;

	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
//	var_dump($results);
	foreach($results as $row) {
//	echo "<PRE style=\"text-align:left;\">";var_dump($row); echo "</PRE>";

		$id = $row["s_id"];
		$title = $row["s_title"];
		$detail = $row["s_detail"];
		$s_index = $row["s_outline"];
		$author = $row["author"];
		$category = $row["category"];
//	echo "p1:".$id.$title.$detail;

		$s_flg .="<select  name=\"flg\"><option value=\"公開\"";
		if($row["show_flg"]==1){
			$s_flg .= " selected>公開</option><option value=\"下書き\">下書き</option>";
		}else{
			$s_flg .= ">公開</option><option value=\"下書き\" selected>下書き</option>";
		}
		$s_flg .="</select>";

		$i_flg .="<select  name=\"index\"><option value=\"有\"";
		if($row["s_index"]==1){
			$i_flg .= " selected>有</option><option value=\"無\">無</option>";
		}else{
			$i_flg .= ">有</option><option value=\"無\" selected>無</option>";
		}
		$i_flg .="</select>";

		$dt = explode(" ", $row["create_date"]);
		$date = $dt[0];$time = $dt[1];

		$sdt = explode(" ", $row["open_date"]);
		$s_date = $sdt[0];$s_time = $sdt[1];

		$edt = explode(" ", $row["close_date"]);
		$e_date = $edt[0];$e_time = $edt[1];

//	echo "p3:".$date. $time;

	}

 $db_set = "ORDER BY c_id";
$sql = "SELECT * FROM s_category ".$db_set;

$stmt = $pdo->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
//var_dump($results);

foreach($results as $row) {
//	echo "id: ".$category." ".$row["c_id"];
 	if($category == $row["c_id"]){
		$select = " checked";
	}else{
		$select = "";
	}

	$view .= "<input type=\"checkbox\" name=\"category[]\" value=\"".$row["c_id"]."\".$select />".$row["ca_name"];

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
	category： <?php echo $view ?><br>
	detail： <br><textarea type="text" name="detail" cols="60" rows="15" /><?php echo $detail ?></textarea><br>
	show： <?php echo $s_flg ?>
	show index： <?php echo $i_flg ?><br>
	create date： <input type="text" name="date" value="<?php echo $date ?>" /> <input type="text" name="time" value="<?php echo $time ?>" /><br>
	show date： <input type="text" name="s_date" value="<?php echo $s_date ?>" /> <input type="text" name="s_time" value="<?php echo $s_time ?>" />
	　end date： <input type="text" name="e_date" value="<?php echo $e_date ?>" /> <input type="text" name="e_time" value="<?php echo $e_time ?>" /><br>
	<input type="hidden" name="id" value="<?php echo $e_time ?>" />
	<input type="submit" />
</form>
</div>

</div>

<?php include("footer.php"); ?>
</body>
</html>