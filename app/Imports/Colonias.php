<?php
namespace App\Imports;

use App\Colonia;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class Colonias implements ToModel,WithStartRow
{
    public function model(array $row)
    {

        return new Colonia([
            'codigo' => $row[0],
            'codigo_postal'=> $row[1],
            'nombre'=> $row[2],

        ]);

    }

    public function startRow(): int
    {
        return 6;
    }
}
