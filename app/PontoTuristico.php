<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PontoTuristico extends Model
{
    protected $fillable = [
        'id','ciadade_id','zona_id','nomePontoTuristico',
    ];

    public function cidade()
    {
        return $this->belongsTo(Cidade::class);
    }
    
    
}
