<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TenGroup extends Model
{
    protected $fillable = [
        'university', 'enddate', 'discountrules'
    ];
}
