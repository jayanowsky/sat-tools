<?php
namespace App\Imports;

use App\Sepomex;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use mysql_xdevapi\Exception;

class CodigosSepomex implements ToModel,WithStartRow
{
    public function model(array $row)
    {
        try {
            return new Sepomex([
                'd_codigo' => trim($row[0], "\x00..\x1F"),
                'd_asenta' => trim($row[1], "\x00..\x1F"),
                'd_tipo_asenta' => trim($row[2], "\x00..\x1F"),
                'D_mnpio' => trim($row[3], "\x00..\x1F"),
                'd_estado' => trim($row[4], "\x00..\x1F"),
                'd_ciudad' => trim($row[5], "\x00..\x1F"),
                'd_CP' => trim($row[6], "\x00..\x1F"),
                'c_estado' => trim($row[7], "\x00..\x1F"),
                'c_oficina' => trim($row[8], "\x00..\x1F"),
                'c_CP' => trim($row[9], "\x00..\x1F"),
                'c_tipo_asenta' => trim($row[10], "\x00..\x1F"),
                'c_mnpio' => trim($row[11], "\x00..\x1F"),
                'id_asenta_cpcons' => trim($row[12], "\x00..\x1F"),
                'd_zona' => trim($row[13], "\x00..\x1F"),
                'c_cve_ciudad' => trim($row[14], "\x00..\x1F"),

            ]);
        }catch (Exception $e){
            dd($e);
    }

    }

    public function startRow(): int
    {
        return 2;
    }
}
