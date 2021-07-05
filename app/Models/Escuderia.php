<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Piloto;

class Escuderia extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'motor', 'director'];
    public $timestamps = false;

    public function pilotos(){
        return $this->hasMany(Piloto::class);
    }
}
