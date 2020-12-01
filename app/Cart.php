<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{

    public $timestamps = false;
    protected $fillable = [
        'user_id', 'pizza_id', 'quantity'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function pizza(){
        return $this->belongsTo('App\Pizza');
    }
}
