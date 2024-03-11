(function () {
    var btn_show_bookingbox = document.getElementById('toggle-bookingbox-button');
    var div_show_bookingbox = document.getElementById('toggle-bookingbox-div');

    if(btn_show_bookingbox){
        btn_show_bookingbox.addEventListener('click', function() {            
            div_show_bookingbox.classList.toggle('hidden');
        });
    }

    var automatic_scroll = document.getElementById('result-listing-container');
    if(automatic_scroll){
        automatic_scroll.scrollIntoView({ behavior: 'smooth' });
    }


    function initMap() {
        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer;
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 9,
            center: {lat: 21.14, lng: -86.90},

        disableDefaultUI: false,
    		mapTypeControl: false,
    		scaleControl: false,
    		zoomControl: false,
    		streetViewControl: false,
    		fullscreenControl: false,
        });

        directionsDisplay.setMap(map);
     	calculateAndDisplayRoute(directionsService, directionsDisplay);
    }

    function calculateAndDisplayRoute(directionsService, directionsDisplay) {
        var data = JSON.parse(localStorage.getItem('bookingbox'));
        
        directionsService.route({		
          origin: `${data.from.lat},${data.from.lng}`,
          destination: `${data.to.lat},${data.to.lng}`,
          travelMode: 'DRIVING'
        }, function(response, status) {
          if (status === 'OK') {
            directionsDisplay.setDirections(response);
          } else {
            window.alert('Directions request failed due to ' + status);
          }
        });
    }
    if(availability == 1){
      initMap();
    }
    
})();