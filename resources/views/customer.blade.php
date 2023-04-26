@extends('layouts.app')

@section('content')

@push('head')

<!-- Scripts -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCV6jR_b13NVklyQYPgl7SjCtBFcURQQmI"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
<script src="{{ asset('js/script.js')}}"></script>
<script src="{{ asset('js/app.js')}}"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

@endpush
    <div class="container">
        <h1>List of Customers</h1>

        <table class="table table-striped table-bordered">
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
                <th>Actions</th>
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
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#locationModal" onclick="initMap('{{ $customer->post_code }}')">Get location</button>
                        
                      <!-- Modal -->
                      <div class="modal fade" id="locationModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Customers location</h5>
                            </div>
                            <div class="modal-body">
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
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCV6jR_b13NVklyQYPgl7SjCtBFcURQQmI&callback=initMap">
  </script>
@endsection
