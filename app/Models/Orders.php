<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Users;

class Orders extends Model
{
    protected $table = 'orders';
    protected $fillable = ['order', 'user_id', 'created_at', 'updated_at'];
    use HasFactory;
    public function User(){
        return $this->belongsTo(users::class);
    }
    public function orderdetails(){
        return $this->hasMany(orderdetails::class);
    }
}
