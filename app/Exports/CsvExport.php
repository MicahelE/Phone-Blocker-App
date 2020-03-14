<?php

namespace App\Exports;

use App\Phoneuser;
use Maatwebsite\Excel\Concerns\FromCollection;

class CsvExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Phoneuser::all();
    }
}
