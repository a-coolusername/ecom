<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Category extends Model
{
    public function product(){
    return $this->hasmany(Product::class);
    }
}
