<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sepomex extends Model
{
    protected $table = 'catalogo_sepomex';
    protected $fillable=[ 'd_codigo', 'd_asenta','d_tipo_asenta', 'D_mnpio', 'd_estado', 'd_ciudad', 'd_CP', 'c_estado', 'c_oficina', 'c_CP', 'c_tipo_asenta', 'c_mnpio', 'id_asenta_cpcons', 'd_zona', 'c_cve_ciudad'];


    public static function truncateTb(){
        $estados = static::truncate();
        return true;
    }
}
