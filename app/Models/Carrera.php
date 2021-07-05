<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'temporada', 'circuito', 'pais'];
    
    public function pilotos(){
        return $this->belongsToMany(Piloto::class);
    }
}
