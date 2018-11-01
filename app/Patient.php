<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'lastname',
        'firstname',
        'dni',
        'email',
    ];
}
