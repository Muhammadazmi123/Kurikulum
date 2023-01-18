<?php

namespace App\Exports;

use App\Models\JadwalPiket;
use Maatwebsite\Excel\Concerns\FromCollection;

class JadwalPiketExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return JadwalPiket::all();
    }
}
