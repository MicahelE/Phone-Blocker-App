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
        $str=$row['name'];
        $fullname = explode(" ", $str);
        return new Phoneuser([
           
            'name'=> $row['name'],
            'phonenumber'=> $row['phone_1_number'],
            'dob'=> $row['date_of_birth'],
            'lga'=> $row['lga'],
            'address'=> $row['address'], 
            'momname'=> $row['mother_maiden_name'],
            'nin'=> $row['nin'],
            'puk'=> $row['phone_1_imei'],
            'simno'=> $row['no_of_sims'],
            'phonetype1'=> $row['phone_1_model'],
            'phonetype2'=> $row['phone_2_model'], 
            'phonetype3'=> $row['phone_3_model'],
            'network'=> $row['phone_1_network'],
            'blockstatus'=> false,
            'blockstatus2'=> false,
            'blockstatus3'=> false,

            'midname'=> $fullname[1],
        'email'=> $row['email_address'],
        'gender'=> $row['gender'],
        'city'=> $row['city'],
        'state'=> $row['state'],
        'linetype1'=>  $row['line_1_type'],
        'phonenumber2'=> $row['phone_2_number'],
        'network2'=> $row['phone_2_network'],
        'linetype2'=> $row['line_2_type'],
        'imei2'=> $row['phone_2_imei'],
        'phonenumber3'=> $row['phone_3_number'],
        'network3'=> $row['phone_3_network'],
        'linetype3'=> $row['line_3_type'],
        'imei3'=> $row['phone_3_imei'],
        'phonenumber4'=> $row['phone_4_number'],
        'network4'=> $row['phone_4_network'],
        'linetype4'=> $row['line_4_type'],
        'phonetype4'=> $row['phone_4_model'],
        'imei4'=> $row['phone_4_imei'],
        'blockstatus4'=> true,
        
        // 'name'     => $row['name'],
        // 'phonenumber'    => $row['phonenumber'],
        // 'dob'    => $row['date_of_birth'],
        // 'lga'     => $row['lga'],
        // 'address'    => $row['address'], 
        // 'momname'     => $row['mothers_maiden_name'],
        // 'nin'     => $row['nin'],
        // 'puk'    => $row['puk'],
        // 'simno'    => $row['simno'],
        // 'phonetype1'     => $row['phone_number_1'],
        // 'phonetype2'    => $row['phone_number_2'], 
        // 'phonetype3'     => $row['phone_number_3'],
        // 'network'    => $row['network1'],
        // 'blockstatus'    => false,
        // 'blockstatus2'    => false,
        // 'blockstatus3'    => false,
        ]);
    }
}
