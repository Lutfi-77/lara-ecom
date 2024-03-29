<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'product_id',
        'address',
        'qty',
        'price',
        'status',
    ];


    public function product(){
        return $this->belongsTo('App\Models\product', 'product_id');
    }

    public function order(){
        return $this->belongsTo('App\Models\Order', 'order_id');
    }

}
