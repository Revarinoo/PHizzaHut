<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name','price','description','image'
    ];

    public function orderdetail(){
        return $this->belongsTo('App\Orderdetail');
    }

    public function cart(){
        return $this->belongsTo('App\Cart');
    }
}
