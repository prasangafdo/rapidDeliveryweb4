<style>
       /* Set the size of the div element that contains the map */
      #map {
        height: 60%;  /* The height is 400 pixels */
        width: 90%;  /* The width is the width of the web page */
       }
    </style>
  </head>
  <body>
    <h3>{{"Your parcel is here"}}</h3>
    <!--The div element for the map -->
    <div id="map"></div>
    <script>
// Initialize and add the map
function initMap() {
  // The location of Uluru
  var parcel = {lat: 7.1824795, lng: 79.9043215}
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 15, center: parcel});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: parcel, map: map});
}
    </script>

    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDPtg5NhcYerzCS0sHvWAff9XqUipqY8LU&callback=initMap">
    </script>