<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function Pizza(){
        return $this->hasMany('App\Pizza');
    }
}
