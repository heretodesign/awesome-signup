<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FiftyGroup extends Model
{
    protected $fillable = [
        'university', 'enddate', 'discountrules'
    ];
}
