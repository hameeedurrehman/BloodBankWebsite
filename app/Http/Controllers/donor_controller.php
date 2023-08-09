<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Models\Donor;
use App\Models\Bloodgroup;
use App\Models\Hospital;
class donor_controller extends Controller
{
    public function index(){
        return view('donor/main');
    }
    public function create() {
        $Bloodgroup = Bloodgroup::all();
        $Hospital = Hospital::all();
        return view ('donor.create')
        ->with(['Bloodgroup' => $Bloodgroup])->with(['Hospital' => $Hospital]);
    }
    public function store(Request $request) {
        $donor = new donor;
        $donor->name = $request->get('name');
        $donor->fathername = $request->get('fathername');
        $donor->address = $request->get('address');
        $donor->cnic = $request->get('cnic');
        $donor->phoneno = $request->get('phoneno');
        $donor->dob = $request->get('dob');
        $donor->age = $request->get('age');
        $donor->gender = $request->get('gender');
        $donor->Bloodgroup = $request->get('Bloodgroup');
        $donor->Hospital = $request->get('hospitalname');
        $donor->save();
        return redirect('donor/create')->with('status', ' updated Successfully!');
    }
    public function read() {
        $donor = donor::with('bloodgroup')->get();
        return view('donor/read')->with(['donor' => $donor]);
    }
    public function edit($cnic) { 
 
        $donor = donor::find($cnic); 
       
        return view('donor/update')
        ->with(['donor' => $donor]);
        }
    public function update(Request $request, $cnic)
    {
        $donor = donor::find($cnic);
        $donor->name = $request->get('name');
        $donor->fathername = $request->get('fathername');
        $donor->address = $request->get('address');
        $donor->phoneno = $request->get('phoneno');
        $donor->dob = $request->get('dob');
        $donor->age = $request->get('age');
        $donor->cnic = $request->get('cnic');
        $donor->gender = $request->get('gender');
        $donor->Bloodgroup = $request->get('Bloodgroup');
        $donor->Hospital = $request->get('hospitalname');
        $donor->save();
        return redirect('donor/read')
        ->with('status', 'cnic ' . $cnic . ' updated Successfully!');
    }
    public function delete($cnic)
    {
        donor::destroy($cnic);
        return redirect('donor/read')
        ->with('status', 'cnic ' . $cnic . ' deleted Successfully!');
    }
}
