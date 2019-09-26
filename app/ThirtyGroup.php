<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThirtyGroup extends Model
{
    protected $fillable = [
        'university', 'enddate', 'discountrules'
    ];
}
