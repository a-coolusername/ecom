<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    public function orders(){
        return $this->belongsTo(Orders::class);
    }
}
