<?php

// セッションを使うときは宣言
session_start();
//ログイン認証
$l_id = $_POST["name"];
$l_pass = $_POST["password"];

$id = "admin";
$pass = "password";

 $h_title="チーズアカデミー　｜　ログイン";
 include("head.php");

// HTML出力用の変数 $view を宣言
$res = "";

// ログイン判定
if ($l_id == $id and $l_pass == $pass) {

$_SESSION["login_id"] = "sucess";
 $res .="ログインに成功しました。";
 $res .="<li><a href=\"index.php\">管理ページTop</a></li>";

}else{

 $res .="ログインに失敗しました。(ID/PASSWORDが間違っています。)";

}

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