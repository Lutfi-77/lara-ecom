<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Customer extends Authenticatable
{
    use HasFactory;

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function cart(){
        return $this->hasMany('App\Models\Cart', 'user_id');
    }

    public function order(){
        return $this->hasMany('App\Models\Order', 'customer_id');
    }

}
