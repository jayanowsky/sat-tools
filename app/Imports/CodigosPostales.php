<?php
namespace App\Imports;

use App\CodigoPostal;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class CodigosPostales implements ToModel,WithStartRow
{
    public function model(array $row)
    {

        return new CodigoPostal([
            'codigo' => $row[0],
            'estado'=> $row[1],
            'codigo_municipio'=> (int)$row[2],
            'codigo_localidad'=> $row[3]
        ]);

    }

    public function startRow(): int
    {
        return 5;
    }
}
