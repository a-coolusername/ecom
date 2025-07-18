<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Product extends Model
{
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
