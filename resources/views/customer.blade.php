@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>List of Customers</h1>

        <table class="table">
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
                            <button class="show-on-map-btn" data-postcode="{{ $customer->post_code }}" data-address="{{ $customer->house_number_or_name }} {{ $customer->street_name }}, {{ $customer->town }}, {{ $customer->county }}, {{ $customer->country }}">Show on Map</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
