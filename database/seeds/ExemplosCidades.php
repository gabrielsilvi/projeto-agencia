<?php

use App\Cidade;
use Illuminate\Database\Seeder;

class ExemplosCidades extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createCidades();
    }
    public function createCidades(){
        Cidade::create([
            'nomeCidade' =>'Recife',
            'estado_id' => 1,
        ]);
        Cidade::create([
            'nomeCidade' =>'Maceió',
            'estado_id' => 2,
        ]);
        Cidade::create([
            'nomeCidade' =>'Aracaju',
            'estado_id' => 3,
        ]);
        Cidade::create([
            'nomeCidade' =>'São Paulo',
            'estado_id' => 4,
        ]);
        Cidade::create([
            'nomeCidade' =>'Palmas',
            'estado_id' => 5,
        ]);

    }
    
}
