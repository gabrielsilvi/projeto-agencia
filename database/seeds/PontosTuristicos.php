<?php

use App\PontoTuristico;
use Illuminate\Database\Seeder;

class PontosTuristicos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createPontoTuristico();
    }
    public function createPontoTuristico(){
        PontoTuristico::create([
            'cidade_id' => 1,
            'zona_id' => 2,
            'nomePontoTuristico' => 'Boa Viagem',
        ]);
        PontoTuristico::create([
            'cidade_id' => 2,
            'zona_id' => 2,
            'nomePontoTuristico' => 'Pajuçara',
        ]);
        PontoTuristico::create([
            'cidade_id' => 3,
            'zona_id' => 2,
            'nomePontoTuristico' => 'Praia de Atalaia',
        ]);
        PontoTuristico::create([
            'cidade_id' => 4,
            'zona_id' => 9,
            'nomePontoTuristico' => 'Parque Ibirapuera',
        ]);
        PontoTuristico::create([
            'cidade_id' => 4,
            'zona_id' => 7,
            'nomePontoTuristico' => 'Museu do Futebol',
        ]);
    }
}
