
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
        
            function init() {
                var myCenter =new google.maps.LatLng(50.627942, 5.567388);
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 16,

                    // The latitude and longitude to center the map (always required)
                   // center: new google.maps.LatLng(40.6700, -73.9400), // New York 

                    center: myCenter,

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [     {       featureType:'water',        elementType:'all',        stylers:[         {hue:'#252525'},          {saturation:-100},          {lightness:-81},          {visibility:'on'}       ]     },{       featureType:'landscape',        elementType:'all',        stylers:[         {hue:'#666666'},          {saturation:-100},          {lightness:-55},          {visibility:'on'}       ]     },{       featureType:'poi',        elementType:'geometry',       stylers:[         {hue:'#555555'},          {saturation:-100},          {lightness:-57},          {visibility:'on'}       ]     },{       featureType:'road',       elementType:'all',        stylers:[         {hue:'#777777'},          {saturation:-100},          {lightness:-6},         {visibility:'on'}       ]     },{       featureType:'administrative',       elementType:'all',        stylers:[         {hue:'#cc9900'},          {saturation:100},         {lightness:-22},          {visibility:'on'}       ]     },{       featureType:'transit',        elementType:'all',        stylers:[         {hue:'#444444'},          {saturation:0},         {lightness:-64},          {visibility:'off'}        ]     },{       featureType:'poi',        elementType:'labels',       stylers:[         {hue:'#555555'},          {saturation:-100},          {lightness:-57},          {visibility:'off'}        ]     }   ]
              

                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using out element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);
                var image = 'images/marker.png';
                var myLatLng = new google.maps.LatLng(50.627942, 5.567388);
                var beachMarker = new google.maps.Marker({
                      position: myLatLng,
                      map: map,
                      icon: image
                    });
            }