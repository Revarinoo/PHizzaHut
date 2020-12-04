<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'user_id'
    ];
    
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function orderdetail(){
        return $this->hasMany('App\Orderdetail');
    }
}
