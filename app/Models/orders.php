<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Users;

class orders extends Model
{
    public function User(){
        return $this->belongsTo(users::class);
    }
}
