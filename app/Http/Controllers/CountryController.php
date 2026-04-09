<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::all();
        return view('country.index', compact('countries'));
    }

    public function create()
    {
        return view('country.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        Country::create(['name' => $request->name]);

        return redirect()->route('country.index')
            ->with('success', 'Country added successfully!');
    }

    public function edit($id)
    {
        $country = Country::findOrFail($id);
        return view('country.edit', compact('country'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $country = Country::findOrFail($id);
        $country->update(['name' => $request->name]);

        return redirect()->route('country.index')
            ->with('success', 'Country updated successfully!');
    }

    public function destroy($id)
    {
        Country::findOrFail($id)->delete();

        return redirect()->route('country.index')
            ->with('success', 'Country deleted successfully!');
    }
}