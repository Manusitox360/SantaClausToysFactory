<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countries = Country::all();

        return response()->json($countries, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'string'
        ]);
        
        $country = Country::create([
            'name' => $validated['name']
        ]);

        $country->save();

        return response()->json($country, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $country = Country::find($id);

        if (!$country) { 
            return response()->json(['message' => 'Country not found'], 404);
        }

        return response()->json($country, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $country = Country::find($id);

        if(!$country){
            return response()->json(['message' => 'Country not found'], 404);
        }
        
        $validated = $request->validate([
            'name' => 'string'
        ]);
        
        $country->update([
            'name' => $validated['name']
        ]);

        $country->save();

        return response()->json($country, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $country = Country::find($id);

        if (!$country) {
            return response()->json(['message' => 'Country not found'], 404);
        }

        return response()->json([], 204);
    }
}
