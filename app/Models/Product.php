<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function stock(){
        return $this->hasOne(stock::class);
    }
    public function order_details(){
        return $this->belongsTo(Order_details::class);
    }
}
