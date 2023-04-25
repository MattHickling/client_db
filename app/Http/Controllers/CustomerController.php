<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function store(Request $request)
    {
        $customer = new Customer;
        $customer->company_name = $request->input('company_name');
        $customer->first_name = $request->input('first_name');
        $customer->last_name = $request->input('last_name');
        $customer->phone_number = $request->input('phone_number');
        $customer->house_number_or_name = $request->input('house_number_or_name');
        $customer->street_name = $request->input('street_name');
        $customer->town = $request->input('town');
        $customer->county = $request->input('county');
        $customer->country = $request->input('country');
        $customer->post_code = $request->input('post_code');
        $customer->save();

        return redirect('/customer')->with('success', 'Customer added successfully');
    }

    public function index()
    {
        $customers = Customer::all();
        return view('customer', compact('customers'));
    }
}
