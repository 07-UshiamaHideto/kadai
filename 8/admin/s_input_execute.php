<?php
$ev_name = $_POST["ev_name"];
/* $flg = $_POST["flg"];
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
 */
$author = $_POST["author"];
$detail = $_POST["detail"];
$result = $_POST["result"];

$s_da = $_POST["s_date"];
$s_ti = $_POST["s_time"];
$s_date = $s_da." ".$s_ti;
$e_da = $_POST["e_date"];
$e_ti = $_POST["e_time"];
$e_date = $e_da." ".$e_ti;

$ca = $_REQUEST["category"];
 $category ="";
 for($i=0; $i<sizeof($ca); $i++){
 $cate = $ca[$i]; $category = $category." ".$cate;
 }


$pdo = new PDO("mysql:host=localhost;dbname=cs_academy;charset=utf8", "root", "");
$sql = "INSERT INTO `s_sche`(`sc_id`, `ev_name`, `detail`, `result`, `s_date`, `e_date`) VALUES (NULL, :name, :detail, :result, CAST('". $s_date ."' AS DATETIME), CAST('". $e_date ."' AS DATETIME) ";
var_dump($sql);
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name', $ev_name, PDO::PARAM_STR);
$stmt->bindValue(':detail', $detail, PDO::PARAM_STR);
$stmt->bindValue(':result', $oresult, PDO::PARAM_STR);
//$stmt->bindValue(':flg', $show_flg, PDO::PARAM_INT);
//$stmt->bindValue(':cate', $category, PDO::PARAM_STR);
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

 $h_title="Moter Sport Schedule　｜　新規登録完了";
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

	echo "<dd class=\"news-title\">".$ev_name."</dd>";
	echo "<dd>".$detail."</dd>";
	echo "<dd>".$result."</dd>";
	echo "<span class=\"section-title-news text-center\">".$s_date." - ".$e_date."</span>";
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