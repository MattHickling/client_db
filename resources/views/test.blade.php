<!DOCTYPE html>
<html>
<head>
  <title>Google Maps API Test</title>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCV6jR_b13NVklyQYPgl7SjCtBFcURQQmI"></script>
</head>
<body>
  <div id="map" style="height: 400px; width: 100%;"></div>
  <script>
    function initMap() {
      var map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 37.7749, lng: -122.4194},
        zoom: 8
      });
    }
  </script>
  <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCV6jR_b13NVklyQYPgl7SjCtBFcURQQmI&callback=initMap">
  </script>
</body>
</html>
