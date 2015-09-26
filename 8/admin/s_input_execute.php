<?php
$title = $_POST["title"];
$flg = $_POST["flg"];
 if ($flg == "公開"){
	$show_flg = 1;
 }else{
	$show_flg = 0;
 }
$ind = $_POST["index"];
 if ($ind == "有"){
	$s_index = 1;
 }else{
	$s_index = 0;
 }
$author = $_POST["author"];
$detail = $_POST["detail"];
$outline = $_POST["outline"];
$da = $_POST["date"];
$ti = $_POST["time"];
$date = $da." ".$ti;


$ca = $_REQUEST["category"];
 $category ="";
 for($i=0; $i<sizeof($ca); $i++){
 $cate = $ca[$i]; $category = $category." ".$cate;
 }


$pdo = new PDO("mysql:host=localhost;dbname=cs_academy;charset=utf8", "root", "");
$sql = "INSERT INTO `s_news`(`s_id`, `s_title`, `s_detail`, `s_outline`, `author`, `show_flg`, `s_index`, `category`, `create_date`, `update_date`) VALUES (NULL, :title, :detail, :outline, :author, :flg, :index, :cate, CAST('". $date ."' AS DATETIME), sysdate()) ";
var_dump($sql);
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':title', $title, PDO::PARAM_STR);
$stmt->bindValue(':detail', $detail, PDO::PARAM_STR);
$stmt->bindValue(':outline', $outline, PDO::PARAM_STR);
$stmt->bindValue(':flg', $show_flg, PDO::PARAM_INT);
$stmt->bindValue(':index', $s_index, PDO::PARAM_INT);
$stmt->bindValue(':author', $author, PDO::PARAM_STR);
$stmt->bindValue(':cate', $category, PDO::PARAM_STR);
$result = $stmt->execute();
//var_dump($result);
if($result) {
	echo "データが登録できました";
	echo "<a href=select.php>一覧へ</a>";
} else {
	echo "データの登録に失敗しました";
}
$pdo = null;

// include("login_j.php");

 $h_title="Moter Sport News　｜　新規登録完了";
 include("head.php");
 $da = date("Y-m-j");
 $ta = date("H:i:s");
?>
</head>
<body>

<header>
<h1>Moter Sport News<span> 新規登録完了</span></h1>
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
<br>
<?php

	echo "<article class=\"news-detail\">";
	echo "<dl class=\"clearfix\">";

	echo "<dd class=\"news-title\">".$title."</dd>";
	echo "<dd>".$detail."</dd>";
	echo "<span class=\"section-title-news text-center\">".$date." author by ".$author."</span>";
	echo "</dl>";
	echo "</article>";

/*
echo "title:".$title."<br>";
echo "show_flg:".$show_flg."<br>";
echo "author:".$author."<br>";
echo "detail:".$detail."<br>";
echo "date:".$date."<br>";
//echo "time:".$time."<br>";
echo "category:".$category."<br>";
*/
?>


</div>

<?php include("footer.php"); ?>
</body>
</html>