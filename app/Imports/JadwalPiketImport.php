<?php

namespace App\Imports;

use App\Models\JadwalPiket;
use Maatwebsite\Excel\Concerns\ToModel;

class JadwalPiketImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new JadwalPiket([
            'hari'      => $row['1'],
            'nama'     => $row['2'], 
        ]);
    }
}
