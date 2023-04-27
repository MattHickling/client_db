<?php

namespace App\Models;

use Illuminate\Http\Client\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'first_name',
        'last_name',
        'phone_number',
        'house_number_or_name',
        'street_name',
        'town',
        'county',
        'country',
        'post_code',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function validatePostCode(Request $request)
{
    $request->validate([
        'post_code' => 'required|regex:/^[A-Za-z]{1,2}[0-9Rr][0-9A-Za-z]? [0-9][ABD-HJLNP-UW-Zabd-hjlnp-uw-z]{2}$/',
    ]);
}

}
