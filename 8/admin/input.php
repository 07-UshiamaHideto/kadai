<?php
// php include("login_j.php"); 
 $h_title="Motersport News　｜　管理ページ 新規登録";
 include("head.php");
 $da = date("Y-m-j");
 $ta = date("H:i:s");

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

	$view .= "<input type=\"checkbox\" name=\"category[]\" value=\"".$row["c_id"]."\" />".$row["ca_name"];

}

$pdo = null;

 ?>
</head>
<body>

<header>
<h1>Motersport News<span>お知らせ・更新情報 新規登録</span></h1>
</header>

<div class="main">

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
<form action="input_execute.php" method="post">
	title： <input type="text" name="title" value="" />
	　author： <input type="text" name="author" value="" size="15" /><br>
	category： <?php echo $view ?><br>
	detail： <br><textarea type="text" name="detail" cols="60" rows="15" /></textarea><br>
	outline： <br><textarea type="text" name="outline" cols="60" rows="10" /></textarea><br>
	show： <select  name="flg"><option>公開</option selected><option>下書き</option></select>
	show index： <select  name="index"><option>有</option selected><option>無</option></select><br>
	　create date： <input type="text" name="date" value="<?php echo $da ?>" size="10"/> <input type="text" name="time" value="<?php echo $ta ?>" size="10"/><br>
	　show date： <input type="text" name="s_date" value="<?php echo $da ?>" size="10"/> <input type="text" name="s_time" value="<?php echo $ta ?>" size="10"/><br>
	　end date： <input type="text" name="e_date" value="2020/12/31" size="10"/> <input type="text" name="e_time" value="23:59:59" size="10"/><br>
	<input type="submit" value="登録する"/>
</form>
</div>

</div>

<?php include("footer.php"); ?>
</body>
</html>