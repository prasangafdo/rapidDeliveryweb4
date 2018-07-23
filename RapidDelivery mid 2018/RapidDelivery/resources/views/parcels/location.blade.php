<h3>This is the location</h3>


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
    @foreach ($locations as $location)
      <h2>Longitude: {{$location->longitude}}</h2>
      <h2>Latitude: {{$location->latitude}}</h2>
          @endforeach
    <!--The div element for the map -->
    <div id="map"></div>

    @foreach ($locations as $location)
      <h2>Longitude: {{$location->longitude}}</h2>
      <h2>Latitude: {{$location->latitude}}</h2>
    <script>
    function initMap() {
      var parcel = {lat: {{$location->latitude}}, lng: {{$location->longitude}}}
      var map = new google.maps.Map(
          document.getElementById('map'), {zoom: 15, center: parcel});
      // The marker
      var marker = new google.maps.Marker({position: parcel, map: map});
    }
    </script>
    @endforeach

    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDPtg5NhcYerzCS0sHvWAff9XqUipqY8LU&callback=initMap">
    </script>