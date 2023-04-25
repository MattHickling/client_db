<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
