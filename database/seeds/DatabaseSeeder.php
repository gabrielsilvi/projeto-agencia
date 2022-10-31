<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ZonaSeeder::class,
            ExemplosEstados::class,
            ExemplosCidades::class,
            PontosTuristicos::class,
            Pacotes::class,
    ]);
    }
}
