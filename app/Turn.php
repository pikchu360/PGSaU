<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turn extends Model
{
    protected $fillable = [
        'id',
        'name',
        'description',
        'turn_date',
    ];
}
