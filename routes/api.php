<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::post('/getColonia','catalogosController@getColonia');



//DESCARGAS
Route::get('/descargarCodigosPostales','DescargarCatalogosController@codigospostales');
Route::get('/descargarColonias','DescargarCatalogosController@colonias');
Route::get('/descargarEstados','DescargarCatalogosController@estados');

//IMPORTACIONES
Route::get('/importarCodigosPostales','ImportarCatalogosController@codigospostales');
Route::get('/importarColonias','ImportarCatalogosController@colonias');
Route::get('/importarEstados','ImportarCatalogosController@estados');
Route::get('/importarMunicipios','ImportarCatalogosController@municipios');
Route::get('/importarSepomex','ImportarCatalogosController@sepomex');


//CONSULTAS
Route::post('/consulta/codigopostal','ConsultarCatalogosController@porCodigoPostal');
