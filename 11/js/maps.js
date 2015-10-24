function loca(){

//$(function(){
if (navigator.geolocation) {

//	現在の位置情報取得を実施
navigator.geolocation.getCurrentPosition(
//	位置情報取得成功時
function (pos) { 
lat = pos.coords.latitude;
lon = pos.coords.longitude;
loc = lat + " " +lon;
console.log("a loc:"+loc+" lat:"+lat+" lon:"+lon);
//	document.getElementById("location").innerHTML = loc;
	setMap(lat, lon);

},function (error) { // 位置情報取得失敗時
	var mess = "";
	switch (error.code) {
	//	位置情報取得できない場合
	case error.POSITION_UNAVAILABLE:
		mess = "位置情報の取得ができませんでした。";
		break;
	//	Geolocation使用許可されない場合
	case error.PERMISSION_DENIED:
		mess = "位置情報取得の使用許可がされませんでした。";
		break;
	//	タイムアウトした場合 
	case error.PERMISSION_DENIED_TIMEOUT:
		mess = "位置情報取得中にタイムアウトしました。";
		break;
	}
	window.alert(mess);
});
console.log("b loc:"+loc+" lat:"+lat+" lon:"+lon);
} else {
	window.alert("本ブラウザではGeolocationが使えません");
}

console.log("4 loc:"+loc);
// });

//地図
map = new google.maps.Map(
	document.getElementById("maps"),{
	zoom : 15,
	center : new google.maps.LatLng(0,0),
	mapTypeId : google.maps.MapTypeId.ROADMAP
	}
);

//マーカー
marker = new google.maps.Marker({
	position: new google.maps.LatLng(0,0),
	map: map,
	title: "自分"
});

/* markers = new google.maps.Marker({
	position: latlng,
	map: map ,
	title: "ほかの人"
}); */

}

//地図上に現在地を表示
function setMap(lat, lon){
console.log("c loc:"+loc+" lat:"+lat+" lon:"+lon);
	var pos = new google.maps.LatLng(lat, lon);
	map.setCenter(pos);
	marker.setPosition(pos);
};

function setMap2(lat2, lon2){
//	var im = m;
//	console.log("map2 lat:"+lat2+" lon:"+lon2+" m:"+m+" im:"+im);
	var latlng = new google.maps.LatLng(lat2, lon2);
//	map.setCenter(pos);
	markers = new google.maps.Marker({
	position: latlng,
	map: map ,
	title: "ほかの人"
});
};

// }

//位置移動
function toPanmap(lat2, lon2) {
  map.panTo(new google.maps.LatLng(lat2, lon2));
}

//住所から検索
function getLatLng() {
var geocoder = new google.maps.Geocoder();
geocoder.geocode({
		address: place,
		region: 'jp'
	}, function(results, status) {
		if (status == google.maps.GeocoderStatus.OK) {
			var bounds = new google.maps.LatLngBounds();
			for (var r in results) {
			if (results[r].geometry) {
				var latlng = results[r].geometry.location;
				bounds.extend(latlng);
				var address = results[r].formatted_address.replace(/^日本, /, '');
				$("#searh_r").prepend("<div class=\"search_w\"><button id=\"result_"+r+"\" value=\""+latlng+"\"><div class=\"result_t\">"+address+"<br>"+latlng+"</div></button></div>");

				f = r;
				adr = address;
				search_s();

/*				f = r;
				$.each(f,function(){
					var ml = "#result_" + this;
					    $(ml).on("click",function(){
					     var s_loc = $(ml).val();
					     localStorage.setItem(address, s_loc);
					    });
				});*/
				
				new google.maps.InfoWindow({
				    content: address //+ "<br>(Lat, Lng) = " + latlng.toString()
				}).open(map, new google.maps.Marker({
				    position: latlng,
				    map: map
				}));
			    }
			}
			map.fitBounds(bounds);
		} else if (status == google.maps.GeocoderStatus.ERROR) {
			alert("サーバとの通信時にエラー！");
		} else if (status == google.maps.GeocoderStatus.INVALID_REQUEST) {
			alert("リクエスト問題,geocode()に渡すGeocoderRequestを確認");
		} else if (status == google.maps.GeocoderStatus.OVER_QUERY_LIMIT) {
			alert("短時間にクエリを送りすぎ");
		} else if (status == google.maps.GeocoderStatus.REQUEST_DENIED) {
			alert("このページのジオコーダの利用が不許可");
		} else if (status == google.maps.GeocoderStatus.UNKNOWN_ERROR) {
			alert("サーバ側でなんらかのトラブルが発生");
		} else if (status == google.maps.GeocoderStatus.ZERO_RESULTS) {
			alert("見つかりません");
		} else {
			alert("？");
		}
	});
};

$("#search_g").on("click",function(){
	place =$("#address").val();
	console.log("place:"+place);
	getLatLng(place);
});

