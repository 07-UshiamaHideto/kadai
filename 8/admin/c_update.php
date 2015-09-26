<?php
$flg1 = "";$flg2 = "";

if(isset($_GET["id"])){
	$id = $_GET["id"];
//	echo "id".$id;
	$db_set = "WHERE c_id=".$id;
//	echo $db_set;

	$pdo = new PDO("mysql:host=localhost;dbname=cs_academy;charset=utf8", "root", "");
	$sql = "SELECT * FROM s_category ".$db_set;

	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

	foreach($results as $row) {
//	echo "<PRE style=\"text-align:left;\">";var_dump($row); echo "</PRE>";

		$id = $row["c_id"];
		$c_name = $row["ca_name"];
		$c_outline = $row["c_outline"];
//	echo "p1:".$id." ".$c_name." ".$c_outline;

		if($row["show_flg"]==1){
			$flg1 = " selected";
		}else{
			$flg2 = " selected";
		}

//	echo "p2:".$flg1.$flg2;

	}
	$pdo = null;

}
 include("login_j.php");

 $h_title="Motersport News　｜　カテゴリ更新登録";
 include("head.php");
 $da = date("Y-m-j");
 $ta = date("H:i:s");

 ?>
</head>
<body>

<header>
<h1>Motersport News<span>カテゴリ 更新登録</span></h1>
</header>

<div class="main">
<?php echo $lo ?>
<div class="search_a">
<ul>
<li><a href="index.php">index</a></li>
<li><a href="input.php">ニュース新規追加</a></li>
<li><a href="news_list.php">ニュース一覧</a></li>
</ul>
<!--  form action="search.php" method="post">
<span class="serach_t">News Search : </span><input type="text" name="search" /><input type="submit" value="SEARCH" />
</form -->
</div>
<?php echo "p2:".$flg1.$flg2; ?>
<div class="form_a">
<form action="update_execute.php" method="post">
	Category Name： <input type="text" name="title" value="<?php echo $c_name; ?>" /><br>
	outline： <br><textarea type="text" name="detail" cols="60" rows="15" /><?php echo $c_outline; ?></textarea><br>
	show： <select name="flg"><option>公開</option<?php echo $flg1; ?>><option>下書き</option<?php echo $flg2; ?>></select><br
	<input type="hidden" name="id" value="<?php echo $id ?>" />
	<input type="submit" />
</form>
</div>

</div>

<?php include("footer.php"); ?>
</body>
</html>