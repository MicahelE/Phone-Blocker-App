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
    { $data=Phoneuser::latest()->paginate(10);
       return view('datatable', compact('data'));
    }

    public function profile($id)
    { 
        $profile= Phoneuser::find($id);
       return view('profile', compact('profile'));
    }


    public function update($id)
    { 
        $user= Phoneuser::find($id);
        $user->update(['blockstatus' => !$user->blockstatus]);
        return back();
    }
}

