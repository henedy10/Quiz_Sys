<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quizzes extends Model
{
    public function teacher(){
        return $this->belongsTo(User::class);
    }
}
