

function initMap(customer) {
    let geocoder = new google.maps.Geocoder();
  
    geocoder.geocode({ 'address': customer.post_code }, function(results, status) {
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
  
    // Set the customer data in the modal content elements
    document.getElementById('companyID').innerText = customer.id;
    document.getElementById('companyName').innerText = customer.company_name;
    document.getElementById('firstName').innerText = customer.first_name;
    document.getElementById('lastName').innerText = customer.last_name;
    document.getElementById('phoneNumber').innerText = customer.phone_number;
    document.getElementById('houseNumber').innerText = customer.house_number_or_name;
    document.getElementById('streetName').innerText = customer.street_name;
    document.getElementById('town').innerText = customer.town;
    document.getElementById('county').innerText = customer.county;
    document.getElementById('country').innerText = customer.country;
    document.getElementById('postCode').innerText = customer.post_code;
  }

  

  function validatePostCode(post_code) {
    let postCodeRegex = /^[A-Z0-9]{1,4}[ -]?[A-Z0-9]{1,4}$/i;
    let areaCodeRegex = /^\d{1,5}$/;
    
    // Check if the post code matches either the UK post code or international area code format
    if (postCodeRegex.test(post_code) || areaCodeRegex.test(post_code)) {
      return true;
    } else {
      return false;
    }
  }
  
  
  $(document).ready(function() {
    $('#customer-form').submit(function(event) {
      // Prevent default form submit action
      event.preventDefault();
  
      let post_code = $('#post_code').val();
  
      if (!validatePostCode(post_code)) {
        alert('Please enter a valid UK postcode');
        return;
      }
  
      let formData = $(this).serialize();
  
      $.ajax({
        url: '/customer',
        type: 'POST',
        data: formData,
        beforeSend: function() {
          $('#submit-button').prop('disabled', true);
          $('#loading-icon').show();
        },
        success: function(response) {
          // Clear input fields
          $('#company_name').val('');
          $('#first_name').val('');
          $('#last_name').val('');
          $('#phone_number').val('');
          $('#house_number_or_name').val('');
          $('#street_name').val('');
          $('#town').val('');
          $('#county').val('');
          $('#country').val('');
          $('#post_code').val('');
        },
        error: function(xhr) {
          console.log(xhr.responseText);
        },
        complete: function() {
          $('#submit-button').prop('disabled', false);
          $('#loading-icon').hide();
        }
      });
    });
  });
  


  $(document).ready(function() {
    $('#customerTable').DataTable();
});
