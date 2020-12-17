<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = [
        'id','id_user','id_pacote',
    ];

    // public function usuario()
    // {
    //     return $this->hasOne(User::class, 'id', 'id_user');
    // }

    public function pacotes()
    {
        return $this->hasMany(Pacote::class,'id','id_pacote','preco',);
    }
    

}
