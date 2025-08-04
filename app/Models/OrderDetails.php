<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    protected $fillable = ['order_id', 'product_name', 'quantity'];
    public function orders(){
        return $this->belongsTo(Orders::class);
    }
}
