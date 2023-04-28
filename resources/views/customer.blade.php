@extends('layouts.app')

@section('content')

@push('head')

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCV6jR_b13NVklyQYPgl7SjCtBFcURQQmI"></script>
<script src="{{ asset('js/script.js')}}"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>


@endpush
    <div class="container">
        <h1>List of Customers</h1>

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
                  {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#locationModal" onclick="initMap('{{ $customer->post_code }}')">Get location</button> --}}
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#locationModal{{ $customer->id }}" onclick="initMap({{ $customer }})">Customer details</button>

                  <div class="modal fade" id="locationModal{{ $customer->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered modal-lg">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Customer location</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body row">
                                  <div class="col-md-12">
                                      <div id="map" style="height: 400px;"></div>
                                  </div>
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

