<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bloodgroup;

class BloodgroupController extends Controller
{
    public function read(){
        $Bloodgroup = Bloodgroup::all();
        return view('bloodgroup/read')->with(['Bloodgroup' => $Bloodgroup]);
    }
    public function create(){
        return view('bloodgroup/create');
    }
    public function store(Request $request){
        $Bloodgroup = new Bloodgroup;
        $Bloodgroup->Bloodgroupname = $request->get('Bloodgroupname');
        $Bloodgroup->save();
        return redirect('bloodgroup/create');
    }
}
