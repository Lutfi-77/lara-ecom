<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;


    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function customer(){
        return $this->belongsTo('App\Models\Customer');
    }

    public function detailOrder(){
        return $this->hasMany('App\Models\OrderDetail', 'order_id');
    }

}
