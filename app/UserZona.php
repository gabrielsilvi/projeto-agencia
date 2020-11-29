<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserZona extends Model
{
    protected $fillable = [
        'id_user','id_zona',
    ];

    public function usuario()
    {
        return $this->hasOne(User::class, 'id', 'id_user');
    }

    public function zonas()
    {
        return $this->hasMany(Zona::class, 'id', 'id_zona');
    }
}
