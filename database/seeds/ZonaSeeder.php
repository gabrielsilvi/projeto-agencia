<?php

use App\Zona;
use Illuminate\Database\Seeder;

class ZonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
     $this->createZonas();

    }
    public function createZonas()
        {
            Zona::create([
                'nomeZona' =>'frio',
                'id' => 1, 
            ]);
            Zona::create([
                'nomeZona' =>'calor',
                'id' => 2,
            ]);
            Zona::create([
                'nomeZona' =>'saude',
                'id' => 3,
            ]);
            Zona::create([
                'nomeZona' =>'aventura',
                'id' => 4,
            ]);
            Zona::create([
                'nomeZona' =>'rural',
                'id' => 5,
            ]);
            Zona::create([
                'nomeZona' =>'ecoturismo',
                'id' => 6,
            ]);
            Zona::create([
                'nomeZona' =>'cultural',
                'id' => 7,
            ]);
            Zona::create([
                'nomeZona' =>'esporte',
                'id' => 8,
            ]);
            Zona::create([
                'nomeZona' =>'urbanismo',
                'id' => 9,
            ]);

        }
}
