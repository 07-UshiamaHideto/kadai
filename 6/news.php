<?php
 $title="チーズアカデミー　｜　News";
 $des="チーズアカデミーのNews";
 $key_w="チーズ,アカデミー,News";
 include("top.php");
 ?>

<?php include("header.php"); ?>
    
    <section class="news contents-box">
        <h2 class="section-title text-center">
            <span class="section-title__yellow">News</span>

<?php

if(isset($_GET["id"])){
$id = $_GET["id"];
//echo "id".$id;
$db_set = "WHERE news_id=".$id;
//echo $db_set;
}elseif(isset($_GET["date"])){
$date = $_GET["date"];
//echo "date".$date;
$db_set = "WHERE create_date BETWEEN '".$date." 00:00:00.000000'  AND '".$date." 23:59:59.000000' ";
//echo $db_set;
}else{
$db_set = "ORDER BY create_date DESC";
}

$pdo = new PDO("mysql:host=localhost;dbname=cs_academy;charset=utf8", "root", "");
//$sql = "SELECT * FROM news ORDER BY news_id DESC LIMIT 5";
$sql = "SELECT * FROM news ".$db_set;

$stmt = $pdo->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
//var_dump($results);
foreach($results as $row) {
//	var_dump($row);
//	echo "<span class=\"section-title-ja text-center\">".mb_substr($row["create_date"],0,10)."</span>";

	echo "</h2>";
	echo "<article class=\"news-detail\">";
	echo "<dl class=\"clearfix\">";

	echo "<dd class=\"news-title\">".$row["news_title"]."</dd>";
	echo "<dd>".$row["news_detail"]."</dd>";
	echo "<span class=\"section-title-ja text-center\">".$row["create_date"]." writen by ".$row["author"]."</span>";
	echo "</dl>";
	echo "</article>";
}
$pdo = null;
?>
 <!--         <span class="section-title-ja text-center">日付</span>
        </h2>
        <article class="news-detail">
            <dl class="clearfix">
                <dd class="news-title">ニュースタイトル</dd>
                <dd>ニュース詳細：あいうえおかきくけこさしすせそたちつてと</dd>
            </dl>
            
        </article>
-->

    </section>

<?php include("footer.php"); ?>