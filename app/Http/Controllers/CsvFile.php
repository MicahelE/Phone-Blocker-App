<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\CsvExport;
use App\Imports\CsvImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Phoneuser;

class CsvFile extends Controller
{
    //
    public function index()
    { $data=Phoneuser::latest()->paginate(10);
       return view('csv_file_pagination', compact('data'));
    }
     /**
    * @return \Illuminate\Support\Collection
    */
    public function csv_export() 
    {
        return Excel::download(new CsvExport, 'users.xlsx');
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function csv_import() 
    {
        // if ($request->file('file')->isValid()) {
            //
        
        Excel::import(new CsvImport,request()->file('file'));
    // }
        return back();
    }

    public function data()
    { $data=Phoneuser::all();
       return view('datatable', compact('data'));
    }

    public function profile($id)
    { 
        $profile= Phoneuser::find($id);
       return view('profile', compact('profile'));
    }


    public function update(Request $request,$id)
    { 
        $user= Phoneuser::find($id);
        // $user= Phoneuser::find($id);
        $user->name= $request->input('username').' '.$request->input('first_name');
        $user->midname=$request->input('midname');
        $user->dob=$request->input('dob');
        $user->gender=$request->input('gender');
        $user->momname=$request->input('momname');
        $user->email=$request->input('email');
        $user->nin=$request->input('nin');
        $user->address=$request->input('address');
        $user->lga=$request->input('lga');
        $user->city=$request->input('city');
        $user->state=$request->input('state');
        // $user->update(['blockstatus' => !$user->blockstatus]);
        $user->save();
        return back();
    }

    public function block(Request $request, $id)
    { 
        $user= Phoneuser::find($id);
        $block=$request->input('blockstatus');
        $user->update([$block => !$user->$block]);
        return back();
    }
}

