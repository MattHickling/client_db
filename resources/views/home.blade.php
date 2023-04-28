@extends('layouts.app')


@section('content')

<div class="container">
    <div id="success-message" class="alert alert-success d-none" role="alert"></div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Enter your customers details:') }}</div>

                
                    <form method="POST" action="/customer" id="customer-form" >
                        @csrf
                    
                        <div class="mb-3">
                            <label for="company_name" class="form-label">Company name:</label>
                            <input type="text" name="company_name" id="company_name" class="form-control">
                        </div>
                    
                        <div class="mb-3">
                            <label for="first_name" class="form-label">First name:</label>
                            <input type="text" name="first_name" id="first_name" class="form-control">
                        </div>
                    
                        <div class="mb-3">
                            <label for="last_name" class="form-label">Last name:</label>
                            <input type="text" name="last_name" id="last_name" class="form-control">
                        </div>
                    
                        <div class="mb-3">
                            <label for="phone_number" class="form-label">Phone number:</label>
                            <input type="text" name="phone_number" id="phone_number" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="house_number_or_name" class="form-label">House Number/Name:</label>
                            <input type="text" name="house_number_or_name" id="house_number_or_name" class="form-control" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="street_name" class="form-label">Street Name:</label>
                            <input type="text" name="street_name" id="street_name" class="form-control" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="town" class="form-label">Town:</label>
                            <input type="text" name="town" id="town" class="form-control" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="county" class="form-label">County:</label>
                            <input type="text" name="county" id="county" class="form-control" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="country" class="form-label">Country:</label>
                            <input type="text" name="country" id="country" class="form-control" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="post_code" class="form-label">Post Code:</label>
                            <input type="text" name="post_code" id="post_code" class="form-control" required>
                        </div>
                    
    

                        <a href="/customer" class="btn btn-primary">Go to Customer List</a>

                        <button type="submit" id="submit-button" class="btn btn-success m-2">Submit</button>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
