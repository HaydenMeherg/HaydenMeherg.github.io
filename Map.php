<!DOCTYPE html>
<html>
  <head>
    <style>
       /* Set the size of the div element that contains the map */
      #map {
        height: 350px;  /* The height is 400 pixels */
        width: 75%;  /* The width is the width of the web page */
       }
    </style>
  </head>
  <body>
   
    <!--The div element for the map -->
    <div class="container" id="map"></div>
    <script>
// Initialize and add the map
function initMap() {
  // The location of Uluru
  var uluru = {lat: 36.895530, lng: -86.109218};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {
          zoom: 10, 
          center: uluru
      });
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({
      position: uluru, 
      map: map});
}
    </script>
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCGqECk9dR699v4cimLNcbGUKO8eDq0meU&callback=initMap">
    </script>
  </body>
    <br><br>
</html>
