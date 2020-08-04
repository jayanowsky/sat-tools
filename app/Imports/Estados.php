<?php
namespace App\Imports;

use App\Estado;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class Estados implements ToModel,WithStartRow
{
    public function model(array $row)
    {

        return new Estado([
            'codigo' => $row[0],
            'codigo_pais'=> $row[1],
            'nombre'=> $row[2],

        ]);

    }

    public function startRow(): int
    {
        return 6;
    }
}
