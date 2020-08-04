<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colonia extends Model
{
    protected $table = 'catalogo_colonias';
    protected $fillable = ['codigo','codigo_postal','nombre'];

    public static function truncateTb(){
        $colonias = static::truncate();
        return true;
    }
}
