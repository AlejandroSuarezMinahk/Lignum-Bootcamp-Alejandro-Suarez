<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    public function actor(){
        return $this->hasMany('App\Models\Actor');
        }

    // use HasFactory;
    protected $table = 'pelicula'; 
}
