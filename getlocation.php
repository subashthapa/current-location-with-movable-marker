<!DOCTYPE html>
<html>
  <head>
    <style>
      #map {
        width: 500px;
        height: 400px;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>
      function initMap() {
      	var myLatLng = {lat: -37.706291, lng: 144.91165};

        var mapDiv = document.getElementById('map');
        
        var map = new google.maps.Map(mapDiv, {
          center: myLatLng,
          zoom: 14
        });

        var marker = new google.maps.Marker({
        	position:myLatLng,
        	draggable:true,
        	map:map,

        });

        google.maps.event.addListener(marker, 'dragend', function (event) {
		    document.getElementById("latbox").value = this.getPosition().lat();
		    document.getElementById("lngbox").value = this.getPosition().lng();
		});

        
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?callback=initMap"
        async defer></script>


    <div id="latbox"><input type="text" id="lngbox" /></div>
  </body>
</html>