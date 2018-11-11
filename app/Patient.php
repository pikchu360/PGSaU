<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'id',
        'lastname',
        'firstname',
        'dni',
        'email',
        'address',
        'phone',
    ];

    //Scope
    public function scopeFirstName($query, $src){
        if($src) return $query->where('firstname', 'LIKE', "%$src%");
    }

    public function scopeLastName($query, $src){
        if($src) return $query->where('lastname', 'LIKE',"%$src%");
    }

    public function scopeDNI($query, $src){
        if($src) return $query->where('dni', 'LIKE',"%$src%");
    }

    public function scopeEmail($query, $src){
        if($src) return $query->where('email', 'LIKE',"%$src%");
    }

    public function scopeAddress($query, $src){
        if($src) return $query->where('address', 'LIKE',"%$src%");
    }

    public function scopePhone($query, $src){
        if($src) return $query->where('phone', 'LIKE',"%$src%");
    }
}
