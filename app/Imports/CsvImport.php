<?php

namespace App\Imports;

use App\Phoneuser;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CsvImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Phoneuser([
            //
            'name'     => $row['name'],
            'phonenumber'    => $row['phonenumber'],
            'dob'    => $row['date_of_birth'],
            'lga'     => $row['lga'],
            'address'    => $row['address'], 
            'momname'     => $row['mothers_maiden_name'],
            'nin'     => $row['nin'],
            'puk'    => $row['puk'],
            'simno'    => $row['simno'],
            'phonetype1'     => $row['phone_number_1'],
            'phonetype2'    => $row['phone_number_2'], 
            'phonetype3'     => $row['phone_number_3'],
            'blockstatus'    => $row['blockage_status'],
        ]);
    }
}
