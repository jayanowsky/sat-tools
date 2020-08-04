<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DescargarCatalogosController extends Controller
{
    public function codigospostales(){
        $url = 'http://omawww.sat.gob.mx/tramitesyservicios/Paginas/documentos/c_CP.xls';
        $source = file_get_contents($url);
        file_put_contents(public_path("cp.xls"), $source);
        echo 'Se ha descargado el ARCHIVO';
    }

    public function colonias(){
        $url = 'http://omawww.sat.gob.mx/tramitesyservicios/Paginas/documentos/c_Colonia.xls';
        $source = file_get_contents($url);
        file_put_contents(public_path("colonias.xls"), $source);
        echo 'Se ha descargado el ARCHIVO';
    }

    public function estados(){
        $url = 'http://omawww.sat.gob.mx/tramitesyservicios/Paginas/documentos/C_Estado.xls';
        $source = file_get_contents($url);
        file_put_contents(public_path("estados.xls"), $source);
        echo 'Se ha descargado el ARCHIVO';
    }

    public function municipios(){
        $url = 'http://omawww.sat.gob.mx/tramitesyservicios/Paginas/documentos/c_Municipio.xls';
        $source = file_get_contents($url);
        file_put_contents(public_path("municipios.xls"), $source);
        echo 'Se ha descargado el ARCHIVO';
    }
}
