<?php

namespace App;

use App\PontoTuristico;

use Illuminate\Database\Eloquent\Model;


class Pacote extends Model
{
    protected $fillable = [
        'id', 'preco', 'img', 'pontoTuristico',
    ];


    public function pontoturistico()
    {
        return $this->hasOne(PontoTuristico::class, 'id');
    }
    public function pedidos()
    {
        return $this->belongsTo(Pedido::class);
    }

}
