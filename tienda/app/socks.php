<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class socks extends Model
{
    protected $fillable = [
        'id_socks','nombre','descripcion','material','tipo_lavado'
        ,'cantidad_pares','tamanos','imagen'
    ];

    protected $hidden = [];
}
