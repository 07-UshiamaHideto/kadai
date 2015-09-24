<?php
 $title="チーズアカデミー　｜　News";
 $des="チーズアカデミーのNews";
 $key_w="チーズ,アカデミー,News";
 include("top.php");
 ?>

<?php include("header.php"); ?>
    
    <section class="news contents-box">
        <h2 class="section-title text-center">
            <span class="section-title__yellow">News Search</span>


<div class="search_a">
<form action="search.php" method="post">
<span class="serach_t">News Search:</span><input type="text" name="search" /><input type="submit" value="SEARCH" />
</div>

<?php

if($_POST["search"] ==""){

echo "<div class=\"text_n\">入力ありません。</div>";

}elseif(isset($_POST["search"])){

$se = $_POST["search"];
$num = 0;
//echo "id".$id;
$db_set = "WHERE `news_title` LIKE '%".$se."%' OR `news_detail` LIKE '%".$se."%'";
//echo $db_set;

$pdo = new PDO("mysql:host=localhost;dbname=cs_academy;charset=utf8", "root", "");
//$sql = "SELECT * FROM news ORDER BY news_id DESC LIMIT 5";
$sql = "SELECT * FROM news ".$db_set;

$stmt = $pdo->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

//echo "<PRE style=\"text-align:left;\">";
//var_dump($results);
//echo "</PRE>";

foreach($results as $row) {
//	var_dump($row);
//	echo "<span class=\"section-title-news text-center\">".mb_substr($row["create_date"],0,10)."</span>";

	echo "</h2>";
	echo "<article class=\"news-detail\">";
	echo "<dl class=\"clearfix\">";

	echo "<dd class=\"news-title\">".$row["news_title"]."</dd>";
	echo "<dd>".$row["news_detail"]."</dd>";
	echo "<span class=\"section-title-news text-center\">".$row["create_date"]." author by ".$row["author"]."</span>";
	echo "</dl>";
	echo "</article>";

	$num=$num+1;

}
echo "<div class=\"search_n\">｢".$se."｣検索件数：".$num."</div>";

$pdo = null;

}

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