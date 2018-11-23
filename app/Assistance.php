<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assistance extends Model
{
    protected $fillable = [
        'id',
        'patient_id',
        'license_id',
        'start_date',
        'end_date',
        'status_mail',
    ];
}
