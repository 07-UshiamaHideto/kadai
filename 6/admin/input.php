<?php
$da = date("Y-m-j");
$ta = date("H:i:s");
?>
<html>
<head>
</head>
<body>
<header class="header">
<form action="input_execute.php" method="post">
	title <input type="text" name="title" value="" /><br>
	category: <input type="checkbox" name="category[]" value="News" />News <input type="checkbox" name="category[]" value="Exam" />Exam <input type="checkbox" name="category[]" value="Column" />Column<input type="checkbox" name="category[]" value="Other" />Other<br>
	show: <select  name="flg"><option>公開</option selected><option>下書き</option></select>
	author: <input type="text" name="author" value="" size="15" /><br>
	detail: <br><textarea type="text" name="detail" cols="60" rows="15" /></textarea><br>
	create date: <input type="text" name="date" value="<?php echo $da ?>" size="10"/> <input type="text" name="time" value="<?php echo $ta ?>" size="10"/><br>
	<input type="submit" />
</form>
</header>
</body>
</html>