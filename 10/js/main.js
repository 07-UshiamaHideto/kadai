
function loca(){

//$(document).ready(function(){

$(function(){

if (navigator.geolocation) {
	loc = "";
	// 現在の位置情報取得を実施
	 navigator.geolocation.getCurrentPosition(
	// 位置情報取得成功時
	function (pos) { 
		lat = pos.coords.latitude;
		lon = pos.coords.longitude;
		loc = lat + " " +lon;
	console.log("loc:"+loc);
//		document.getElementById("location").innerHTML = location;

	},function (error) { // 位置情報取得失敗時
		var mess = "";
		switch (error.code) {
		// 位置情報取得できない場合
			case error.POSITION_UNAVAILABLE:
			mess = "位置情報の取得ができませんでした。";
			break;
		// Geolocation使用許可されない場合
			case error.PERMISSION_DENIED:
			mess = "位置情報取得の使用許可がされませんでした。";
			break;
		// タイムアウトした場合 
			case error.PERMISSION_DENIED_TIMEOUT:
			mess = "位置情報取得中にタイムアウトしました。";
			break;
		}
		window.alert(mess);
	});
	console.log("out loc:"+loc);
} else {
	window.alert("本ブラウザではGeolocationが使えません");
}

// });

});

}

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

//投稿数をカウント

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
	ds.stream().sort("desc").size(me_s).next(function(err, datas) {
//		console.log('desc');
//		console.table(dates);
		datas.forEach(function(data) {
			renderMessage(data);
		});
	});

}

//メッセージ書き込み

function renderMessage(message) {
	var message_html = '<p class="post-text">' + escapeHTML(message.value.content) + '</p>';
	var date_html = '';
//		console.log("user1:"+g_user);
//		console.log("user2:"+message.value.user);
	if(message.value.date) {
		//UNIX時間から日時表示に変換toLocaleString()
		date_html = '<p class="post-date">DATE:'+escapeHTML( new Date(message.value.date).toLocaleString())+'</p>';
	}
	if(message.value.user == g_user){
		css_html = " my_text";
	}else{
		css_html = " o_text";
	}
	$("#"+last_message).before('<div id="'+message.id+'" class="post'+ css_html +'"><span>'+ escapeHTML(message.value.user) +'</span>'+message_html + date_html +'</div>');
	last_message = message.id;
	}

    //インジェクション対策
    function escapeHTML(val) {
	return $('<div>').text(val).html();
    };
