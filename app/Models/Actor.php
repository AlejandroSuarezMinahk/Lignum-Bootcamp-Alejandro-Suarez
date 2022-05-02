<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    public function pelicula(){
        return $this->hasOne('App\Models\Pelicula');        
    }

    // use HasFactory;
    protected $table = 'actor'; 
}
