<?php
 $h_title="Moter Sport News　｜　Top page";
 $des="Moter Sport Newsのまとめページ";
 $key_w="Moter Sport,News";
 include("head.php");
 ?>
</head>
<body>

<?php include("top.php"); ?>

<div class="main">
<div class="side_r">
<?php include("sche_part.php"); ?>
<?php include("result_part.php"); ?>
<?php include("cate_part.php"); ?>
</div>
<div class="con">
<?php include("push_part.php"); ?>
<?php include("news_part.php"); ?>
</div>
</div>

<?php include("footer.php"); ?>

</body>
</html>