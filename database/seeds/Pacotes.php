<?php

use App\Pacote;
use Illuminate\Database\Seeder;

class Pacotes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $this->createPacote();
    }

    public function createPacote(){
        Pacote::create([
            'preco' => '1111',
            'pontoTuristico_id' => 2,
        ]);
        Pacote::create([
            'preco' => '1235',
            'pontoTuristico_id' => 3,
        ]);
        Pacote::create([
            'preco' => '850',
            'pontoTuristico_id' => 4,
        ]);
        Pacote::create([
            'preco' => '333',
            'pontoTuristico_id' => 5,
        ]);
    }
}
