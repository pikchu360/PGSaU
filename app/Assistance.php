<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assistance extends Model
{
    protected $fillable = [
        'id',
        'user_id',
        'justification_date',
    ];
}
