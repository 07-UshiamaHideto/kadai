

//CHAT ログイン

function login_c(){

var flag = "chat_user";
g_user = localStorage.getItem(flag);

//console.log("user:"+g_user);

if(g_user == null){
	$("#content").css("display","none");
	$("#post").css("display","none");

} else {
//		console.log("user:"+g_user);
	$("#u_post").css("display","none");
//		$("#del_p").html("<div id=\"del_my\">"+g_user+"の投稿を削除</div> <div id=\"del_all\">全ての投稿を削除</div>");
	$("#del_p").html("<div id=\"del_my\">"+g_user+"の投稿を削除</div>");
	$("#content").before("<div class=\"u_text\">▶「"+g_user+"」名で投稿</div>");
}

$('#u_post_b').click(function () {
var value = $("#user").val();
if(value){
	console.log("flag:"+flag+",user:"+value);
	localStorage.setItem(flag, value);
	$("#u_post").css("display","none");
	$("#content").css("display","inline");
	$("#post").css("display","inline");
	g_user = value;
}else{
	alert("チャット名の入力がありません");
}
});

}

//投稿過程
function post(ds) {
loca();
console.log("on loc:"+loc);
//	console.log("on g_user:"+g_user);
//	5."message"データストアにメッセージをプッシュする
var content = escapeHTML($("#content").val());
if (content && content !== "") {
	ds.push({
	title: "タイトル",
	user: g_user,
	location: loc,
	content: content,
	date: new Date().getTime()
	}, function (e) {});
}
$("#content").val("");
t_co(ds);
}

//投稿数

function t_co(ds){
count = 0;
//	console.log("ds:"+ds);
ds.stream().sort("desc").next(function(err, datas) {
datas.forEach(function(data) {
	count++
});
console.log("count1:"+count);
$("#num").html("投稿数:"+count);
});

}

//メッセージ読み込み

function t_wr(ds,me_s){
//	console.log("me_s:"+me_s);
//	console.log("last_message:"+last_message);
var last_message ="dummy";
$("#mes").html("<div id=\""+last_message+"\"></div>");
ds.stream().sort("desc").size(me_s).next(function(err, datas) {
//	console.log('desc');
//	console.table(dates);
	datas.forEach(function(data) {
		var last_message ="dummy";
		renderMessage(data);
	});
});

}

//メッセージ書き込み

function renderMessage(message) {

var message_html = '<p class="post-text">' + escapeHTML(message.value.content) + '</p>';
var date_html = '';
var loc_html = '';
//	console.log("user1:"+g_user);
//	console.log("user2:"+message.value.user);
if(message.value.date) {
//	UNIX時間から日時表示に変換toLocaleString()
	date_html = '<p class="post-date">DATE:'+escapeHTML( new Date(message.value.date).toLocaleString())+'</p>';
}
if(message.value.location) {
//	位置情報
	loc_m = message.value.location.split(" ");
	console.log("f_loc:"+loc_m[0]+" "+loc_m[1]);
	setMap2(loc_m[0], loc_m[1]);
	loc_html = '<p class="post-loc">Locatin:'+escapeHTML(message.value.location)+'</p>';
	m++;
}
if(message.value.user == g_user){
	css_html = " my_text";
}else{
	css_html = " o_text";
}
$("#"+last_message).before('<div id="'+message.id+'" class="post'+ css_html +'"><span>'+ escapeHTML(message.value.user) +'</span>'+message_html + date_html +'</div>');
//$("#"+last_message).before('<div id="'+message.id+'" class="post'+ css_html +'"><span>'+ escapeHTML(message.value.user) +'</span>'+message_html + loc_html + date_html +'</div>');
last_message = message.id;
}

//インジェクション対策
function escapeHTML(val) {
	return $('<div>').text(val).html();
};

//メッセージ削除
	
function del(ds){
ds.stream().sort("desc").next(function(err, datas) {
//	console.log('desc');
//	console.table(dates);
	datas.forEach(function(data) {
//	console.log("g_user:"+g_user); 
var m_id = data.id;
var c_na = data.value.user;
if (g_user==c_na){

//	console.log("id:"+m_id+" value.user:"+c_na);
	ds.remove(m_id, function(err, removed){
//	$("#"+message.id).removel();
//	サーバでの削除操作が完了
//	console.log("del"+removed);
	});
}
});
/*
{
	id: 'test'
}
*/
}, function(err) {
//	"Permission denied" or "limit exceeded"
});



} 