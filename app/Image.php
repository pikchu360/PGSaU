<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'url',
        'name',
        'title', 
        'description',
        'status'
    ];
   
    public function users(){
        return $this->belongsTo('App\User','users_id');
    }
}
