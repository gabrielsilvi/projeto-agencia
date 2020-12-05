<?php

namespace App;

use App\PontoTuristico;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pacote extends Model
{
    protected $fillable = [
        'id', 'preco', 'img', 'pontoTuristico',
    ];


    public function pontoturistico()
    {
        return $this->hasOne(PontoTuristico::class, 'id');
    }

   
}
