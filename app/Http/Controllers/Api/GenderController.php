<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Gender;
use Illuminate\Http\Request;

class GenderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genders = Gender::all();
        return response()->json($genders , 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'string'
        ]);
        
        $gender = Gender::create([
            'name' => $validated['name']
        ]);
        $gender->save();
        return response()->json($gender, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $gender = Gender::find($id);
        if (!$gender) {
            return response()->json(['message' => 'Gender not found'], 404);
        }
        return response()->json($gender, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $gender = Gender::find($id);

        if(!$gender){
            return response()->json(['message' => 'Gender not found'], 404);
        }
        
        $validated = $request->validate([
            'name' => 'string'
        ]);
        
        $gender->update([
            'name' => $validated['name']
        ]);
        $gender->save();
        return response()->json($gender, 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $gender = Gender::find($id);
        if (!$gender) {
            return response()->json(['message' => 'Gender not found'], 404);
        }
        $gender->delete();
        return response()->json(['message' => 'Gender deleted'], 200);
    }
}
