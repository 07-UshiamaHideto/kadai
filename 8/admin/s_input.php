<?php
// php include("login_j.php"); 
 $h_title="Motersport News　｜　管理ページ スケジュール登録";
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
<h1>Motersport News<span>スケジュール 新規登録</span></h1>
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
<form action="s_input_execute.php" method="post">
	event title： <input type="text" name="ev_name" value="" />　show： <select  name="flg"><option value="公開">公開</option selected><option value="下書き">下書き</option></select><br>
	place：<br>
	detail： <br><textarea type="text" name="detail" cols="60" rows="15" /></textarea><br>
	result： <br><textarea type="text" name="result" cols="60" rows="10" /></textarea><br>

	　start date： <input type="text" name="s_date" value="<?php echo $da ?>" size="10"/> <input type="text" name="s_time" value="00:00:00" size="10"/> 
	　end date： <input type="text" name="e_date" value="<?php echo $da ?>" size="10"/> <input type="text" name="e_time" value="23:59:59" size="10"/><br>
	<input type="submit" value="登録する"/>
</form>
</div>

</div>

<?php include("footer.php"); ?>
</body>
</html>