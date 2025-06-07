<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    public function teacher(){
        return $this->belongsTo(User::class);
    }
}
