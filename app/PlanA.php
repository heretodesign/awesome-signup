<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlanA extends Model
{
    //
     protected $fillable = [
        'firstname', 'lastname', 'email'
    ];

    public function owner()
    {
        return $this->belongsTo(App\Admin::class);
    }
}
