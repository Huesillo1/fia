<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Escuderia;

class Piloto extends Model
{
    use HasFactory;
    protected $table = "pilotos";

    protected $fillable = ['nombre','apellido','edad','escuderia_id'];

    public function escuderia(){
        return $this->belongsTo(Escuderia::class);
    }

    public function carreras(){
        return $this->belongsToMany(Carrera::class);
    }
}
