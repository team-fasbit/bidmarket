    jQuery(document).ready(function() {
    var map;
    var marker;      
      map = new google.maps.Map(document.getElementById('map'), {
        zoom: 10,
        center: {lat: 44.550869, lng: -73.164372},
        mapTypeId: 'roadmap',
        gestureHandling: 'greedy'
      });
      map.addListener('click', function(mapsMouseEvent) {
          var latlngstring=mapsMouseEvent.latLng.toString();
          var latlongstrin=latlngstring.replace('(','');
          var latlongstr=latlongstrin.replace(')','');
          jQuery("#projectlocation").val(latlongstr);
          marker = new google.maps.Marker({
            position: mapsMouseEvent.latLng
          });            
        marker.setMap(map);
      });
    });