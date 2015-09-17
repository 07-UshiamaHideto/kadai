<?php

// セッションを使うときは宣言
session_start();
//ログイン認証
$l_id = $_POST["name"];
$l_pass = $_POST["password"];

$id = "admin";
$pass = "password";

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

<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
<ul>
  <?php echo $res ?>
<!--  li><a href="index.php">管理ページTop</a></li  -->
</ul>
</body>
</html>