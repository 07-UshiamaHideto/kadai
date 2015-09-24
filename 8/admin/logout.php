<?php

 $h_title="チーズアカデミー　｜　ログアウト";
 include("head.php");

session_start();

unset($_SESSION['login_id']);

 header("Location:login.php");

?>

</head>
<body>
<div class="main">

<header>
<h1>チーズアカデミー<span>お知らせ・更新情報 管理画面</span></h1>
</header>

<ul>
  <?php echo $res ?>
<!--  li><a href="index.php">管理ページTop</a></li  -->
</ul>
</div>

<?php include("footer.php"); ?>
</body>
</html>