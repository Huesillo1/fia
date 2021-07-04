<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Escuderia;

class EscuderiasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Escuderia::Create(['nombre'=>'Mercedes-AMG Petronas','motor'=>'Mercedes','director'=>'Toto Wolff']);
        Escuderia::Create(['nombre'=>'Scuderia Ferrari','motor'=>'Ferrari','director'=>'Mattia Binotto']);
        Escuderia::Create(['nombre'=>'Red Bull Racing','motor'=>'Honda','director'=>'Christian Horner']);
        Escuderia::Create(['nombre'=>'McLaren Racing','motor'=>'Mercedes','director'=>'Andreas Seidl']);
        Escuderia::Create(['nombre'=>'Alpine F1 Team','motor'=>'Renault','director'=>'Laurent Rossi']);
        Escuderia::Create(['nombre'=>'Aston Martin BWT','motor'=>'Mercedes','director'=>'Otmar Szafnauer']);
        Escuderia::Create(['nombre'=>'Scuderia AlphaTauri','motor'=>'Honda','director'=>'Franz Tost']);
        Escuderia::Create(['nombre'=>'Alfa Romeo Racing','motor'=>'Ferrari','director'=>'Frederic Vasseur']);
        Escuderia::Create(['nombre'=>'Haas F1','motor'=>'Ferrari','director'=>'Guenther Steiner']);
        Escuderia::Create(['nombre'=>'Williams','motor'=>'Mercedes','director'=>'Jost Capito']);
    }
}
