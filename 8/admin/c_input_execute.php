<?php
$c_name = $_POST["ca_name"];
$c_outline = $_POST["c_outline"];
$flg = $_POST["flg"];
 if ($flg == "公開"){
	$show_flg = 1;
 }else{
	$show_flg = 0;
 }




$pdo = new PDO("mysql:host=localhost;dbname=cs_academy;charset=utf8", "root", "");
$sql = "INSERT INTO `s_category`(`c_id`, `ca_name`, `c_outline`, `show_flg`) VALUES (NULL, :name, :detail, :outline, :flg ";
var_dump($sql);
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name', $ca_name, PDO::PARAM_STR);
$stmt->bindValue(':outline', $c_outline, PDO::PARAM_STR);
$stmt->bindValue(':flg', $show_flg, PDO::PARAM_INT);
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

 $h_title="Moter Sport News　｜　カテゴリ登録完了";
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