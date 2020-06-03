<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phoneuser;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
class PhoneuserController extends Controller
{
    //

    public function data()
    { $data=Phoneuser::count();

        // foreach (range(1, 14) as $number) {
        //     $number;
        
        // $array = array("Yaba", "Surulere", "Lekki","Ajegunle");
        // $array1 = array("Lagos", "FCT", "Gombe","Oyo");
        // $array2 = array("Nokia", "Techno", "Samsung","Iphone");
        // $array3 = array("Glo", "Mtn", "Airtel","9mobile");
        // $str = '23456789';
        // $array4= array( "Adam", "Alex", "Aaron", "Ben", "Carl", "Dan", "David", "Edward", "Fred", "Frank", "George", "Hal", "Hank", "Ike", "John", "Jack", "Joe", "Larry", "Monte", "Matthew", "Mark", "Nathan", "Otto", "Paul", "Peter", "Roger", "Roger", "Steve", "Thomas", "Tim", "Ty", "Victor", "Walter");
        // $array5= array( "Anderson", "Ashwoon", "Aikin", "Bateman", "Bongard", "Bowers", "Boyd", "Cannon", "Cast", "Deitz", "Dewalt", "Ebner", "Frick", "Hancock", "Haworth", "Hesch", "Hoffman", "Kassing", "Knutson", "Lawless", "Lawicki", "Mccord", "McCormack", "Miller", "Myers", "Nugent", "Ortiz", "Orwig", "Ory", "Paiser", "Pak", "Pettigrew", "Quinn", "Quizoz", "Ramachandran", "Resnick", "Sagar", "Schickowski", "Schiebel", "Sellon", "Severson", "Shaffer", "Solberg", "Soloman", "Sonderling", "Soukup", "Soulis", "Stahl", "Sweeney", "Tandy", "Trebil", "Trusela", "Trussel", "Turco", "Uddin", "Uflan", "Ulrich", "Upson", "Vader", "Vail", "Valente", "Van Zandt", "Vanderpoel", "Ventotla", "Vogal", "Wagle", "Wagner", "Wakefield", "Weinstein", "Weiss", "Woo", "Yang", "Yates", "Yocum", "Zeaser", "Zeller", "Ziegler", "Bauer", "Baxster", "Casal", "Cataldi", "Caswell", "Celedon", "Chambers", "Chapman", "Christensen", "Darnell", "Davidson", "Davis", "DeLorenzo", "Dinkins", "Doran", "Dugelman", "Dugan", "Duffman", "Eastman", "Ferro", "Ferry", "Fletcher", "Fietzer", "Hylan", "Hydinger", "Illingsworth", "Ingram", "Irwin", "Jagtap", "Jenson", "Johnson", "Johnsen", "Jones", "Jurgenson", "Kalleg", "Kaskel", "Keller", "Leisinger", "LePage", "Lewis", "Linde", "Lulloff", "Maki", "Martin", "McGinnis", "Mills", "Moody", "Moore", "Napier", "Nelson", "Norquist", "Nuttle", "Olson", "Ostrander", "Reamer", "Reardon", "Reyes", "Rice", "Ripka", "Roberts", "Rogers", "Root", "Sandstrom", "Sawyer", "Schlicht", "Schmitt", "Schwager", "Schutz", "Schuster", "Tapia", "Thompson", "Tiernan", "Tisler" );
    
        // DB::table('phoneusers')->where('id','=', $number )->update([
         //    'name'=> $array4[array_rand($array4)],
         //    'phonenumber'=> '080'.str_shuffle ( $str ),
         //    'dob'=>'12/3/2016',
         //    'lga'=> $array[array_rand($array)],
         //    'address'=> $array[array_rand($array)],
         //    'momname'=> $array4[array_rand($array4)],
            // 'nin'=> str_shuffle ( $str ),
            // 'puk'=> str_shuffle ( $str ),
            // 'simno'=>strval(rand(1,4)),
         //    'network'=> $array3[array_rand($array3)],
            // 'phonetype1'=> $array2[array_rand($array2)],
            // 'phonetype2'=> $array2[array_rand($array2)],
            // 'phonetype3'=> $array2[array_rand($array2)],
         //    'blockstatus'=> (bool)random_int(0, 1),
         //    'blockstatus2'=> (bool)random_int(0, 1),
         //    'blockstatus3'=> (bool)random_int(0, 1),
        // 'midname'=> $array5[array_rand($array5)],
        // 'email'=> Str::random(6).'@gmail.com',
        // 'gender'=> rand(0, 1) ? 'Male' : 'Female',
        // 'city'=> $array[array_rand($array)],
        // 'state'=> $array1[array_rand($array1)],
        // 'linetype1'=>  rand(0, 1) ? 'Private' : 'Business',
        // 'phonenumber2'=> '080'.str_shuffle ( $str ),
        // 'network2'=> $array3[array_rand($array3)],
        // 'linetype2'=> rand(0, 1) ? 'Private' : 'Business',
        // 'imei2'=> str_shuffle ( $str ),
        // 'phonenumber3'=> '080'.str_shuffle ( $str ),
        // 'network3'=> $array3[array_rand($array3)],
        // 'linetype3'=> rand(0, 1) ? 'Private' : 'Business',
        // 'imei3'=> str_shuffle ( $str ),
        // 'phonenumber4'=> '080'.str_shuffle ( $str ),
        // 'network4'=> $array3[array_rand($array3)],
        // 'linetype4'=> rand(0, 1) ? 'Private' : 'Business',
        // 'phonetype4'=> $array2[array_rand($array2)],
        // 'imei4'=> str_shuffle ( $str ),
        // 'blockstatus4'=> (bool)random_int(0, 1),
        // ]);

        // }

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
