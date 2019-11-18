<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sweaters extends Model
{

    protected $fillable = [
        'id_sweater','nombre','descripcion','material','tipo_lavado',
        'tipo_cierre','cuello','mangas','telar','tamanos','imagen'
    ];

    protected $hidden = [];

}
