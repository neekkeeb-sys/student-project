<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;
use App\Models\Country;
use App\Models\District;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function index()
    {
        $students = Students::all();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        $countries = Country::all();
        $districts = District::all();
        return view('students.create', compact('countries', 'districts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required',
            'country_id'  => 'required',
            'district_id' => 'required',
        ]);

        Students::create([
            'name'        => $request->name,
            'email'       => $request->email,
            'address'     => $request->address,
            'mobile_no'   => $request->mobile_no,
            'gender'      => $request->gender,
            'father_name' => $request->father_name,
            'mother_name' => $request->mother_name,
            'country_id'  => $request->country_id,
            'district_id' => $request->district_id
        ]);

        return redirect()->route('students.index')
            ->with('success', 'Student added successfully!');
    }

    public function edit($id)
    {
        $students   = Students::findOrFail($id);
        $countries = Country::all();
        $districts = District::all();
        return view('students.edit', compact('students', 'countries', 'districts'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'        => 'required',
            'country_id'  => 'required',
            'district_id' => 'required',
        ]);

        $students = Students::findOrFail($id);
        $students->update([
            'name'        => $request->name,
            'email'       => $request->email,
            'address'     => $request->address,
            'mobile_no'   => $request->mobile_no,
            'gender'      => $request->gender,
            'father_name' => $request->father_name,
            'mother_name' => $request->mother_name,
            'country_id'  => $request->country_id,
            'district_id' => $request->district_id,
        ]);

        return redirect()->route('students.index')
            ->with('success', 'Student updated successfully!');
    }

    public function destroy($id)
    {
        Students::findOrFail($id)->delete();

        return redirect()->route('students.index')
            ->with('success', 'Student deleted successfully!');
    }
}
