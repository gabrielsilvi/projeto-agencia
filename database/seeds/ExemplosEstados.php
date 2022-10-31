<?php

use App\Estado;
use Illuminate\Database\Seeder;

class ExemplosEstados extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createEstados();
    }

    public function createEstados(){
        Estado::create([
            'nomeEstado' =>'Pernambuco',
            'sigla' => 'PE',
        ]);
        Estado::create([
            'nomeEstado' =>'Alagoas',
            'sigla' => 'AL',
        ]);
        Estado::create([
            'nomeEstado' =>'Sergipe',
            'sigla' => 'SE',
        ]);
        Estado::create([
            'nomeEstado' =>'São Paulo',
            'sigla' => 'SP',
        ]);
        Estado::create([
            'nomeEstado' =>'Tocantins',
            'sigla' => 'TO',
        ]);
    }
}
