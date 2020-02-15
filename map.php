<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
				
<div style='overflow:hidden;height:440px;width:1300px;'>
	<div id='gmap_canvas' style='height:440px;width:1300px;'></div>
	
	<style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
</div>

<script type='text/javascript'>
	function init_map(){var myOptions = {zoom:5,center:new google.maps.LatLng(19.0759837,72.87765590000004),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(19.0759837,72.87765590000004)});infowindow = new google.maps.InfoWindow({content:'<strong>Kreative Keeda</strong><br>Mumbai, India<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);
</script>