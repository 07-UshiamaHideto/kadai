<?ph

function page_next(){

if(isset($page_num)){
	$page = intval($page_num);
	if($page == 1){
		$lo = " LIMIT " . $set_n;
	}else{
		$news_s = ($page - 1) * $set_n;
		$lo = " LIMIT " . $set_n . " OFFSET " . $news_s;
	}
}else{
	$page = 1;
	$news_s = ($page - 1) * $set_n;
	$lo = " LIMIT " . $set_n . " OFFSET " . $news_s;
}

if ($page != 1) {
	$view .= "<a href=\"news_list.php?page=" . ($page - 1) . "\">前 <  </a>";
}

//$view .= "全ニュース記事数:".$count;

if ($count > $set_n){
	$n_page = (int) (intval($count) / intval($set_n));
	$a_page = $count % $set_n;
	if($a_page != 0){
	$n_page++;
	}
}

if ($n_page > 1) {
	echo "<span class=\"page_n\">";
	for($a=1;$a<=$n_page;$a++){
		if($a==$page){
			$view .= "<span class=\"page_e\">".$a."</span>";
		}else{
			$view .= "<span class=\"page_o\"><a href=\"news_list.php?page=".$a. "\">".$a."</a></span>";
		}
	}
	$view .= "</span>";
}

if ($page != $n_page) {
	$view .= "<a href=\"news_list.php?page=" . ($page + 1) . "\">  > 次</a>";
}

}

 ?>