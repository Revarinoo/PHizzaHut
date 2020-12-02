<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orderdetail extends Model
{
    public function order(){
        return $this->belongsTo('App\Order');
    }

    public function pizza(){
        return $this->belongsTo('App\Pizza');
    }
}
