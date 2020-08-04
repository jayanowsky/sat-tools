<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CodigoPostal extends Model
{
    protected $table = 'catalogo_codigos_postales';
    protected $fillable = ['codigo','estado','codigo_municipio','codigo_localidad'];
    protected $cast = ['codigo_municipio' => 'integer'];

    public static function truncateTb(){
        $codigos = static::truncate();
        return true;
    }
}
