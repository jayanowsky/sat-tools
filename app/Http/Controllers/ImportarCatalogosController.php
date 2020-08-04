<?php

namespace App\Http\Controllers;

use App\CodigoPostal;
use App\Colonia;
use App\Estado;
use App\Imports\CodigosSepomex;
use App\Imports\Estados;
use App\Imports\Municipios;
use App\Municipio;
use App\Sepomex;
use Illuminate\Http\Request;
use App\Imports\CodigosPostales;
use App\Imports\Colonias;
use Maatwebsite\Excel\Facades\Excel;

class ImportarCatalogosController extends Controller
{
    public function codigospostales(){
        ini_set('max_execution_time', 0);
        ini_set('memory_limit', -1);
        CodigoPostal::truncateTb();
        Excel::import(new CodigosPostales, 'cp.xls', NULL, \Maatwebsite\Excel\Excel::XLS);
        dd("Bien");

    }

    public function colonias(){
        ini_set('max_execution_time', 0);
        ini_set('memory_limit', -1);
        Colonia::truncateTb();
        Excel::import(new Colonias, 'colonias.xls', NULL, \Maatwebsite\Excel\Excel::XLS);
        dd("Bien");

    }

    public function estados(){
        ini_set('max_execution_time', 0);
        ini_set('memory_limit', -1);
        Estado::truncateTb();
        Excel::import(new Estados, 'estados.xls', NULL, \Maatwebsite\Excel\Excel::XLS);
        dd("Bien");

    }

    public function municipios(){
        ini_set('max_execution_time', 0);
        ini_set('memory_limit', -1);
        Municipio::truncateTb();
        Excel::import(new Municipios, 'municipios.xls', NULL, \Maatwebsite\Excel\Excel::XLS);
        dd("Bien");

    }

    public function sepomex(){
        ini_set('max_execution_time', 0);
        ini_set('memory_limit', -1);
        Sepomex::truncateTb();
        Excel::import(new CodigosSepomex, 'sepomex.xls', NULL, \Maatwebsite\Excel\Excel::XLS);
        dd("Bien");

    }
}
