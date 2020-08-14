<?php

namespace App\Http\Controllers;

use App\CodigoPostal;
use App\Colonia;
use App\Estado;
use App\Municipio;
use App\Sepomex;
use Illuminate\Http\Request;

class ConsultarCatalogosController extends Controller
{
    public function porCodigoPostal(Request $request)
    {
        try {
            $code_to_search = $request->codigo;

            $codigo_postal = CodigoPostal::where('codigo', '=', $code_to_search)->first();
            $estado = Estado::where('codigo', '=', $codigo_postal->estado)->first();
            $municipio = Municipio::where('codigo_estado', '=', $codigo_postal->estado)->where('codigo', '=', (int)$codigo_postal->codigo_municipio)->first();

            $colonias = Colonia::where('codigo_postal', '=', $code_to_search)->get();


            $sat = ['codigo_postal' => $codigo_postal,
                'estado' => $estado,
                'municipio' => $municipio,
                'colonias' => $colonias,
            ];

            $sepomex = Sepomex::where('d_codigo', '=', $code_to_search)->get();

            $data = [
                'SAT' => $sat,
                'SEPOMEX' => $sepomex
            ];

            $data = $this->respondSuccess($data);
        }catch(\Exception $e){
            $data = $this->respondWentWrong($e);
        }

        return $data;
    }
}
