<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $table = 'catalogo_municipios';
    protected $fillable = [ 'codigo', 'codigo_estado', 'nombre'];


    public static function truncateTb(){
        $estados = static::truncate();
        return true;
    }
}
