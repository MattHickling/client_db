function initMap(post_code) {
    let geocoder = new google.maps.Geocoder();
  
    geocoder.geocode({'address': post_code}, function(results, status) {
      if (status === 'OK') {
        let map = new google.maps.Map(document.getElementById('map'), {
          center: results[0].geometry.location,
          zoom: 15
        });
        let marker = new google.maps.Marker({
          map: map,
          position: results[0].geometry.location
        });
      }
    });
  }
  