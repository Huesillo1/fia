<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PruebaPilotosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Piloto::factory(50)->create();
    }
}
