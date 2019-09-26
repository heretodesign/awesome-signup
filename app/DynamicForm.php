<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DynamicForm extends Model
{
    protected $fillable = [
        'fullname', 'university', 'class', 'year'
    ];
}