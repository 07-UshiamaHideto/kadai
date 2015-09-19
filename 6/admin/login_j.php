<?php 
session_start(); 		// セッションを使うときは宣言

$ok = "sucess";

// HTML出力用の変数 $view を宣言
$lo = "";

if (isset($_SESSION["login_id"]) and $_SESSION["login_id"] == $ok) { 
 
 $lo .="ログイン中。";
} else {
 header("Location:login.php");
} 
?> 