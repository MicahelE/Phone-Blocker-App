<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phoneuser;
class PhoneuserController extends Controller
{
    //

    public function data()
    { $data=Phoneuser::count();
        // $block=DB::table('phoneusers')->where('blockedstatus', 1)->count();
        $block=Phoneuser::where('blockstatus', '1')->count();
        $unblock=Phoneuser::where('blockstatus', '0')->count();
       return view('dashboard', compact('data','block','unblock'));
    }
}
