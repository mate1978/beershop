<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function order_type(){
        return $this->belongsTo(Order_type::class);
    }
    public function order_details(){
        return $this->hasMany(Order_details::class,);

    }
    public function payment_type(){
        return $this->belongsTo(Payment_type::class);
    }

}
