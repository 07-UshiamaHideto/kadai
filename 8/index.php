<?php
 $h_title="Moter Sport News　｜　Top page";
 $des="Moter Sport Newsのまとめページ";
 $key_w="Moter Sport,News";
 include("head.php");
 include("side.php");
 ?>
</head>
<body>

<?php include("top.php"); ?>

<div class="main">
<div class="side_r">

<?php
sche($results1,$view);
result($results2,$view);
catego($results,$view);
 ?>

</div>
<div class="con">
<?php include("push_part.php"); ?>
<?php include("news_part.php"); ?>
</div>
</div>

<?php include("footer.php"); ?>

</body>
</html>