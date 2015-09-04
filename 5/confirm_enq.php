<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>アンケート | 内容確認</title>
<script src="js/jquery-2.1.3.min.js"></script>
<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<link rel="stylesheet" href="css/sample.css">
<script>
$(document).ready(function(){

 if(navigator.geolocation){

     navigator.geolocation.getCurrentPosition(
     //位置情報取得成功
         function(pos){
             var location = "<li>緯度："+pos.coords.latitude+"</li>";
             location += "<li>経度："+pos.coords.longitude+"</li>";
             console.log(pos.coords.latitude);
             console.log(pos.coords.longitude);
             lat = pos.coords.latitude;
             lon = pos.coords.longitude;
             console.log("lat:"+lat);
             console.log("lon:"+lon);
             $(".loc").html("<input type=\"hidden\" name=\"loc\" value=\""+lat+" "+lon+"\" />");
         },
         function(error){
             var maessage = "";
//             swich(error.code){};
                 alert(error.code);
         }
     );
 }else{
    window.alert("geoloatinが使えません");
 };

});
</script>
</head>
<?php
$name = $_POST["name"];
$age = $_POST["age"];
$sex = $_POST["sex"];
$eml = $_POST["eml"];
$checkbox = $_REQUEST["tas"];
 $inst2 ="";
 for($i=0; $i<sizeof($checkbox); $i++){
 $inst = $checkbox[$i]; $inst2 = $inst2." ". $inst;}
$da = date("Y年m月j日 H時i分s秒");
?>
<body>

<header>
<h1>入力内容の確認</h1>
</header>

<main>
<div class="waku">
<div class="left">名前</div><div class="right"><?=$name?></div>
<div class="left">年齢</div><div class="right"><?=$age?></div>
<div class="left">性別</div><div class="right"><?=$sex?></div>
<div class="left">e-mail</div><div class="right"><?=$eml?></div>
<div class="left">趣味</div><div class="right"><?=$inst2?></div>
</div>
<form action="input_finish.php" method="post">
<input type="hidden" name="name" value="<?=$name?>" />
<input type="hidden" name="age" value="<?=$age?>" />
<input type="hidden" name="sex" value="<?=$sex?>" />
<input type="hidden" name="eml" value="<?=$eml?>" />
<input type="hidden" name="inst2" value="<?=$inst2?>" />
<input type="hidden" name="date" value="<?=$da?>" />
<span class="loc"></span>
<div class="sub1">
<input type="submit" value="アンケート内容を送信" />
</form>
</div>
</main>

<footer><small>Program Maker : Hideto Ushiama </small></footer>
</body>
</html>