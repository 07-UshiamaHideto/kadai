<?php
 $h_title="Moter Sport News　｜　News page";
 $des="Moter Sport Newsのニュースページ";
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
<?php include("l_news.php"); ?>
</div>
</div>r

<?php include("footer.php"); ?>
</body>
</html>