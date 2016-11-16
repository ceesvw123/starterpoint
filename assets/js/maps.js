var map;

      window.initMap = function(){
          
        var myLatLng = {lat: 52.39104, lng: 4.85699};
          
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 52.39104, lng: 4.85699},
          zoom: 15,
          scrollwheel: false
        });
        
          var contentString = '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<img src="images/logo.svg" style="width: 20%;">'+
            '<h2 style="color:#000;" id="firstHeading" class="firstHeading">MediaCollege Amsterdam</h2>'+
            '<div id="bodyContent">'+
            '<p style="color:#000";>Contactweg 36, 1014 AN Amsterdam'+
            '</p>';
            '</img>';
            '</div>'+
            '</div>';

        var infowindow = new google.maps.InfoWindow({
          content: contentString
        });
          
      var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'Mediacollege Amsterdam'
      });
      marker.addListener('click', function() {
          infowindow.open(map, marker);
      });
          
        
          
      }