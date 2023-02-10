<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function image(){
        return $this->hasMany('App\Models\Image', 'product_id');
    }

    public function category(){
        return $this->belongsTo('App\Models\Category', 'category_id');
    }

    public function cart(){
        return $this->hasMany('App\Models\Cart', 'product_id');
    }

    public function orderDetail(){
        return $this->hasMany('App\Models\OrderDetail', 'product_id');
    }
    
}
