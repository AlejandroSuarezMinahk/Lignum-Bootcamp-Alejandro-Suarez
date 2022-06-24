<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model{
    protected $table = 'actor'; 
    
    public function peliculas(){
        return $this->hasMany(Pelicula::class, 'id');        
    }    
}
