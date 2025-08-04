<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Users;

class Orders extends Model
{
    protected $table = 'orders';
    public $timestamps = false;
    protected $fillable = ['purchased at', 'order', 'user_id'];
    use HasFactory;
    public function User(){
        return $this->belongsTo(users::class);
    }
    public function orderdetails(){
        return $this->hasMany(orderdetails::class);
    }
}
