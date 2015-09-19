<?php
 $h_title="チーズアカデミー　｜　ログインページ";
 include("head.php");
 ?>
</head>
<body>

<header>
<h1>チーズアカデミー<span>お知らせ・更新情報 ログイン</span></h1>
</header>

<div class="main">
<form action="login_execute.php" method="post">
	ログイン名: <input type="text" name="name" value="" />
	パスワード: <input type="password" name="password" value="" />
	<input type="submit" />
</form>
</body>
</div>

<?php include("footer.php"); ?>
</body>
</html>