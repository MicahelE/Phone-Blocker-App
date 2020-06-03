<?php

use Illuminate\Database\Seeder;

class PhoneUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $array = array("Yaba", "Surulere", "Lekki","Ajegunle");
        $array1 = array("Lagos", "FCT", "Gombe","Oyo");
        $array2 = array("Nokia", "Techno", "Samsung","Iphone");
        $array3 = array("Glo", "Mtn", "Airtel","9mobile");
        $str = '23456789';
        $array4= array( "Adam", "Alex", "Aaron", "Ben", "Carl", "Dan", "David", "Edward", "Fred", "Frank", "George", "Hal", "Hank", "Ike", "John", "Jack", "Joe", "Larry", "Monte", "Matthew", "Mark", "Nathan", "Otto", "Paul", "Peter", "Roger", "Roger", "Steve", "Thomas", "Tim", "Ty", "Victor", "Walter");
        DB::table('phoneusers')->insert([
            'name'=> $array4[array_rand($array4)],
            'phonenumber'=> '080'.str_shuffle ( $str ),
            'dob'=>'12/3/2016',
            'lga'=> $array[array_rand($array)],
            'address'=> $array[array_rand($array)],
            'momname'=> $array4[array_rand($array4)],
            'nin'=> str_shuffle ( $str ),
            'puk'=> str_shuffle ( $str ),
            'simno'=>strval(rand(1,4)),
            'network'=> $array3[array_rand($array3)],
            'phonetype1'=> $array2[array_rand($array2)],
            'phonetype2'=> $array2[array_rand($array2)],
            'phonetype3'=> $array2[array_rand($array2)],
            'blockstatus'=> (bool)random_int(0, 1),
            'blockstatus2'=> (bool)random_int(0, 1),
            'blockstatus3'=> (bool)random_int(0, 1),
        'midname'=> 'Blessing',
        'email'=> Str::random(6).'@gmail.com',
        'gender'=> rand(0, 1) ? 'Male' : 'Female',
        'city'=> $array[array_rand($array)],
        'state'=> $array1[array_rand($array1)],
        'linetype1'=>  rand(0, 1) ? 'Private' : 'Business',
        'phonenumber2'=> '080'.str_shuffle ( $str ),
        'network2'=> $array3[array_rand($array3)],
        'linetype2'=> rand(0, 1) ? 'Private' : 'Business',
        'imei2'=> str_shuffle ( $str ),
        'phonenumber3'=> '080'.str_shuffle ( $str ),
        'network3'=> $array3[array_rand($array3)],
        'linetype3'=> rand(0, 1) ? 'Private' : 'Business',
        'imei3'=> str_shuffle ( $str ),
        'phonenumber4'=> '080'.str_shuffle ( $str ),
        'network4'=> $array3[array_rand($array3)],
        'linetype4'=> rand(0, 1) ? 'Private' : 'Business',
        'phonetype4'=> $array2[array_rand($array2)],
        'imei4'=> str_shuffle ( $str ),
        'blockstatus4'=> (bool)random_int(0, 1),
        ]);
    }
}
