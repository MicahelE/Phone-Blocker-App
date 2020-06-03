<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phoneuser extends Model
{
    //
    protected $fillable = [
'name','phonenumber', 'dob','simno', 'lga', 'address', 'momname','nin','puk', 'simno','phonetype1','phonetype2','phonetype3','network','blockstatus','blockstatus2','blockstatus3','midname','email','gender','city','state','linetype1','phonenumber2','network2','linetype2','imei2','phonenumber3','network3','linetype3','imei3','phonenumber4','network4','linetype4','phonetype4','imei4','blockstatus4'];
protected $guarded = ['student_type'];
}
