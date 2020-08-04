<?php
namespace App\Imports;

use App\Municipio;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class Municipios implements ToModel,WithStartRow
{
    public function model(array $row)
    {

        return new Municipio([
            'codigo' => $row[0],
            'codigo_estado'=> $row[1],
            'nombre'=> $row[2],

        ]);

    }

    public function startRow(): int
    {
        return 6;
    }
}
