<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    use HasFactory;

    public function repuesta()
    {
       return $this->hasMany(Repuesta::class);
    }

    public function test()
    {
        return $this->belongsToMany(Test::class);
    }
   
     
}
