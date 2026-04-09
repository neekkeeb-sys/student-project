<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\District;
use App\Models\Country;

class DistrictController extends Controller
{
    public function index()
    {
        $districts = District::all();
        return view('district.index', compact('districts'));
    }

    public function create()
    {
        $countries = Country::all();
        return view('district.create', compact('countries'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'       => 'required',
            'country_id' => 'required',
        ]);

        District::create([
            'name'       => $request->name,
            'country_id' => $request->country_id,
        ]);

        return redirect()->route('district.index')
            ->with('success', 'District added successfully!');
    }

    public function edit($id)
    {
        $district  = District::findOrFail($id);
        $countries = Country::all();
        return view('district.edit', compact('district', 'countries'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'       => 'required',
            'country_id' => 'required',
        ]);

        $district = District::findOrFail($id);
        $district->update([
            'name'       => $request->name,
            'country_id' => $request->country_id,
        ]);

        return redirect()->route('district.index')
            ->with('success', 'District updated successfully!');
    }

    public function destroy($id)
    {
        District::findOrFail($id)->delete();

        return redirect()->route('district.index')
            ->with('success', 'District deleted successfully!');
    }
}