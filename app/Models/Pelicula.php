<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model{
    protected $table = 'pelicula';

    public function actor(){
        return $this->BelongsTo(Actor::class,'id');
        }

    
}
