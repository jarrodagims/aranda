var locations = [
	{y:31.776385, x:-106.501461,address:"2507 N Stanton St, El Paso, TX 79902",phone:"915.201.0432"},
	//{y:32.8440404, x:-106.099291,address:"HAFB Exchange Bldg 227 551 4th St. Holloman Air Force Base (HAFB), NM 88330",phone:"(575) 479-1035"}
];

function load(){
	var bounds = new google.maps.LatLngBounds();
	for(var i in locations){
		bounds.extend(new google.maps.LatLng(locations[i].y,locations[i].x));
	}
	var mapOptions = {
		center:new google.maps.LatLng(31.78,-106.42),
		zoom:2,
		mapTypeId:google.maps.MapTypeId.ROADMAP
	}

	var map = new google.maps.Map(document.getElementById('map'),mapOptions);
	map.fitBounds(bounds);
	

	var infoWindow = new google.maps.InfoWindow();
	for(var i in locations){
		var marker = new google.maps.Marker({
			position: new google.maps.LatLng(locations[i].y, locations[i].x),
			map:map,
		});
		marker.content=document.createElement('div');
		marker.content.innerHTML = locations[i].address+"<br/>Phone: "+locations[i].phone;
		google.maps.event.addListener(marker,'click',(function(marker){
			return function(){
				infoWindow.setContent(marker.content);
				infoWindow.open(map,marker);
				map.panTo(marker.getPosition());
			};
		})(marker));
	}
	
}

if(window.addEventListener) window.addEventListener('load',load,false);
else{
	if(window.attachEvent) window.attachEvent('onload',load);
	else{
		if(window.onload) window.onload=load;
	}
}