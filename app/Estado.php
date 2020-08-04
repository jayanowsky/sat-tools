<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table = 'catalogo_estados';
    protected $fillable = ['codigo','codigo_pais','nombre'];

    public static function truncateTb(){
        $estados = static::truncate();
        return true;
    }
}
