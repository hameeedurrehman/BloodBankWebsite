<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hospital;

class HospitalController extends Controller
{
    public function read(){
        $Hospital = Hospital::all();
        return view('hospital/read')->with(['Hospital' => $Hospital]);
    }
    public function create(){
        return view('hospital/create');
    }
    public function store(Request $request){
        $Hospital = new Hospital;
        $Hospital->hospitalname = $request->get('hospitalname');
        $Hospital->save();
        return redirect('hospital/create');
    }
}
