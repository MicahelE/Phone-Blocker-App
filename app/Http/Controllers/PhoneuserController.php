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
        $total=Phoneuser::all()->count();
        $block=Phoneuser::where('blockstatus', '1')->orWhere('blockstatus2', '1')->orWhere('blockstatus3', '1')->count();
        $unblock=$total-$block;
       return view('dashboard', compact('data','block','unblock'));
    }
    public function update(Request $request, $id)
    {
        $data=Phoneuser::latest()->paginate(10);
      
        $user= Phoneuser::find($id);
        $user->name=$request->input('name');
        $user->phonenumber=$request->input('phone');
        $user->dob=$request->input('dob');
        $user->lga=$request->input('lga');
        $user->momname=$request->input('momname');
        $user->address=$request->input('address');
        $user->nin=$request->input('nin');
        $user->puk=$request->input('puk');
        if ($request->input('simno')!= "")  $user->simno=$request->input('simno');
        if ($request->input('phonetype1')!= "")   $user->phonetype1=$request->input('phonetype1');
            if ($request->input('phonetype2')!= "")   $user->phonetype2=$request->input('phonetype2');
                if ($request->input('phonetype3')!= "")   $user->phonetype3=$request->input('phonetype3');
                
                if ($request->input('network')!= "")   $user->network=$request->input('network');
        
        
        $user->save();
        return redirect()->route('datatable');
        // return route('datatable');
        // return view('datatable', compact('data'));
    }

    public function blockedlines()
    { $data=Phoneuser::where('blockstatus', '1')->orWhere('blockstatus2', '1')->orWhere('blockstatus3', '1')->get();
        // $block=DB::table('phoneusers')->where('blockedstatus', 1)->count();
        // $block=Phoneuser::where('blockstatus', '1')->count();
        // $unblock=Phoneuser::where('blockstatus', '0')->count();
       return view('blockedlines', compact('data'));
    }


}
