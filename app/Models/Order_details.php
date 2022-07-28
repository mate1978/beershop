<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_details extends Model
{

    use HasFactory;
    public function order(){
        return $this->belongsTo(Orders::class);
    }
    public function products(){
        return $this->hasMany(Product::class);
    }
}
