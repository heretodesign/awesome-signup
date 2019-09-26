<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    protected $fillable = [
        'promo', 'email', 'address', 'city', 'state', 'country', 'phone', 'name_on_card', 'card_number', 'validity', 'cvc'
    ];
}
