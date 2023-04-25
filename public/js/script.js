// $(document).ready(function() {

// // Initialize the map when the modal is shown
// $('#map-modal').on('shown.bs.modal', function () {
//     // Get the address from the form
//     let address = $('#house_number_or_name').val() + ' ' +
//                   $('#street_name').val() + ', ' +
//                   $('#town').val() + ', ' +
//                   $('#county').val() + ', ' +
//                   $('#country').val() + ', ' +
//                   $('#post_code').val();
                  
//     // Geocode the address to get the coordinates
//     let geocoder = new google.maps.Geocoder();
//     geocoder.geocode({'address': address}, function(results, status) {
//         if (status == 'OK') {
//             // Create the map and marker
//             let map = new google.maps.Map(document.getElementById('map'), {
//                 center: results[0].geometry.location,
//                 zoom: 16
//             });
//             let marker = new google.maps.Marker({
//                 map: map,
//                 position: results[0].geometry.location
//             });
//         } else {
//             alert('Geocode was not successful for the following reason: ' + status);
//         }
//     });
// });
// });

function showMap() {
    // Get the address from the form
    let address = document.getElementById('house_number_or_name').value + ' ' +
                  document.getElementById('street_name').value + ', ' +
                  document.getElementById('town').value + ', ' +
                  document.getElementById('county').value + ', ' +
                  document.getElementById('country').value + ', ' +
                  document.getElementById('post_code').value;

    // Geocode the address to get the coordinates
    let geocoder = new google.maps.Geocoder();
    geocoder.geocode({'address': address}, function(results, status) {
        if (status == 'OK') {
            // Create the map and marker
            let map = new google.maps.Map(document.createElement('div'), {
                center: results[0].geometry.location,
                zoom: 16
            });
            let marker = new google.maps.Marker({
                map: map,
                position: results[0].geometry.location
            });

            // Create a popup window with the map
            let popup = window.open('', '', 'width=800,height=600');
            popup.document.write('<html><head><title>Map</title><style>body {margin:0;padding:0;}</style></head><body>');
            popup.document.write('<div style="height: 100%; width: 100%;">');
            popup.document.write(map.getDiv().outerHTML);
            popup.document.write('</div></body></html>');
            popup.document.close();
        } else {
            alert('Geocode was not successful for the following reason: ' + status);
        }
    });
}