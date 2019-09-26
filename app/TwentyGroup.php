<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TwentyGroup extends Model
{
    protected $fillable = [
        'university', 'enddate', 'discountrules'
    ];
}
