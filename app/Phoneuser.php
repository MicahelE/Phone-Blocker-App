<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phoneuser extends Model
{
    //
    protected $fillable = [
'name','phonenumber', 'dob','simno', 'lga', 'address', 'momname','nin','puk', 'simno','phonetype1','phonetype2','phonetype3','network','blockstatus','blockstatus2','blockstatus3'];
protected $guarded = ['student_type'];
}
