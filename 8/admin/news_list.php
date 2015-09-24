<?php
// include("login_j.php");

 $h_title="Moter Sport News　｜　新規登録";
 include("head.php");
 $da = date("Y-m-j");
 $ta = date("H:i:s");

// HTML出力用の変数 $view を宣言
 $view = "";

//表示順序
if(isset($_POST["sl1"]) | isset($_POST["sl2"])){
$j1 = $_POST["sl1"];
$j2 = $_POST["sl2"];

//echo "順序：".$j1.$j2;
if($j1=="ID順"){
	$db_set = "WHERE s_id";
}else{
	$db_set = "ORDER BY create_date";
}
if($j2=="降順"){
	$db_set = $db_set." DESC";
}else{}

}else{
	$db_set = "ORDER BY create_date DESC";
}

//表示数
$set_n = 5;

if(isset($_GET["page"])){
	$page = intval($_GET["page"]);
	if($page == 1){
		$lo = " LIMIT " . $set_n;
	}else{
		$news_s = ($page - 1) * $set_n;
		$lo = " LIMIT " . $set_n . " OFFSET " . $news_s;
	}
}else{
	$page = 1;
	$news_s = ($page - 1) * $set_n;
	$lo = " LIMIT " . $set_n . " OFFSET " . $news_s;
}


//echo "limit:".$lo;

//echo "db_set：".$db_set;
$pdo = new PDO("mysql:host=localhost;dbname=cs_academy;charset=utf8", "root", "");
$sql = "SELECT * FROM s_news ".$db_set;
$stmt = $pdo->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
$count=$stmt->rowCount();


//$sql = "SELECT * FROM news ORDER BY news_id DESC LIMIT 5";
$sql = "SELECT * FROM s_news ".$db_set.$lo;
$stmt = $pdo->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
//行数（レコード数）をカウント

$view .= "全ニュース記事数:".$count;

if ($count > $set_n){
	$n_page = (int) (intval($count) / intval($set_n));
	$a_page = $count % $set_n;
	if($a_page != 0){
	$n_page++;
	}
}

//echo "n_page".$n_page;

//echo "<PRE style=\"text-align:left;\">";
//var_dump($results);
//echo "</PRE>";

foreach($results as $row) {
//	var_dump($row);
//	echo "<span class=\"section-title-news text-center\">".mb_substr($row["create_date"],0,10)."</span>";

	$view .= "<article class=\"news-detail\">";
	$view .= "<dl>";
	$view .= "<a href=\"update.php?id=".$row["s_id"]."\">";
	$view .= "<dd class=\"news-title\"><span>ID：</span>".$row["s_id"]."<span>　Title：</span>".mb_substr($row["s_title"],0,15)."</dd>";
	$view .= "<dd><span>Detail：</span>".mb_substr($row["s_detail"],0,34)."</dd>";
	$view .= "<div class=\"news_d\"><span>Date：</span>".$row["create_date"]."　<span>Author by</span> ".$row["author"]."</div>";
	$view .= "</a>";
	$view .= "</dl>";
	$view .= "</article>";
}
$pdo = null;

echo "<div class=\"page_l\">";
if ($page != 1) {
	$view .= "<a href=\"news_list.php?page=" . ($page - 1) . "\">前 <  </a>";
}

if ($n_page > 1) {
	echo "<span class=\"page_n\">";
	for($a=1;$a<=$n_page;$a++){
		if($a==$page){
			$view .= "<span class=\"page_e\">".$a."</span>";
		}else{
			$view .= "<span class=\"page_o\"><a href=\"news_list.php?page=".$a. "\">".$a."</a></span>";
		}
	}
	$view .= "</span>";
}

if ($page != $n_page) {
	$view .= "<a href=\"news_list.php?page=" . ($page + 1) . "\">  > 次</a>";
}
$view .= "</div>";

?>

</head>
<body>

<header>
<h1>Motersport News<span>お知らせ・更新情報 ニュース一覧</span></h1>
</header>

<div class="main">

<div class="search_a">
<ul>
<li><a href="index.php">index</a></li>
<li><a href="input.php">ニュース新規追加</a></li>
</ul>
<form action="search.php" method="post">
<span class="serach_t">News Search : </span><input type="text" name="search" /><input type="submit" value="SEARCH" />
</form>
</div>

<h2>ニュース一覧</h2>

<div class="list_a">
<form action="news_list.php" method="post">
<select  name="sl1"><option>ID順</option><option>日時順</option></select><select  name="sl2"><option>降順</option><option>昇順</option></select>
<input type="submit" value="更新" />
</form>
</div>

<?php echo $view ?>



</div>

<?php include("footer.php"); ?>
</body>
</html>