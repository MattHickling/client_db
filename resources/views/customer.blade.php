@extends('layouts.app')


@section('content')

        <h1>List of Customers</h1>

        <div class="container">
        
      
        <table id="customerTable" class="table table-striped table-bordered" >
            <thead>
              <tr>
                <th>ID</th>
                <th>Company Name</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone Number</th>
                <th>House Number/Name</th>
                <th>Street Name</th>
                <th>Town</th>
                <th>County</th>
                <th>Country</th>
                <th>Post Code</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Location</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($customers as $customer)
              <tr>
                <td>{{ $customer->id }}</td>
                <td>{{ $customer->company_name }}</td>
                <td>{{ $customer->first_name }}</td>
                <td>{{ $customer->last_name }}</td>
                <td>{{ $customer->phone_number }}</td>
                <td>{{ $customer->house_number_or_name }}</td>
                <td>{{ $customer->street_name }}</td>
                <td>{{ $customer->town }}</td>
                <td>{{ $customer->county }}</td>
                <td>{{ $customer->country }}</td>
                <td>{{ $customer->post_code }}</td>
                <td>{{ $customer->created_at }}</td>
                <td>{{ $customer->updated_at }}</td>
                <td>   
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#locationModal" onclick="initMap({{ $customer }})">Show</button>

                      <!-- Modal -->
                      <div class="modal fade" id="locationModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Customers location</h5>
                            </div>
                            <div class="modal-body" >
                              <div id="map" style="height: 400px; width: 100%;"></div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <button type="button" class="btn btn-secondary" onclick="window.location.href='/home'">Back</button>
        </div>
        
    </div>
    

    <!-- Google Maps API -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&callback=initMap">
    </script>
 
@endsection

