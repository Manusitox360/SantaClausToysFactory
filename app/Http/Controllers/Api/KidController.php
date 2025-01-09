<?php

namespace App\Http\Controllers\Api;

use App\Models\Kid;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KidController extends Controller
{
    public function index()
    {
        $kids = Kid::all();
        return response()->json($kids , 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'string',
            'surname' => 'string',
            'image' => 'string',
            'age' => 'integer',
            'attitude' => 'boolean',
            'gender_id' => 'integer',
            'country_id' => 'integer'
        ]);
        
        $kid = Kid::create([
            'name' => $validated['name'],
            'surname' => $validated['surname'],
            'image' => $validated['image'],
            'age' => $validated['age'],
            'attitude' => $validated['attitude'],
            'gender_id' => $validated['gender_id'],
            'country_id' => $validated['country_id']

        ]);
        $kid->save();
        return response()->json($kid, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kid = Kid::find($id);

        if(!$kid){
            return response()->json(['message' => 'Kid not found'], 404);
        }
        
        return response()->json($kid, 200);
        
    }

    
    public function update(Request $request, string $id)
    {
        $kid = Kid::find($id);

        if(!$kid){
            return response()->json(['message' => 'Kid not found'], 404);
        }

        $validated = $request->validate([
            'name' => 'string',
            'surname' => 'string',
            'image' => 'string',
            'age' => 'integer',
            'attitude' => 'boolean',
            'gender_id' => 'integer',
            'country_id' => 'integer'
        ]);
        
        $kid->update([
            'name' => $validated['name'],
            'surname' => $validated['surname'],
            'image' => $validated['image'],
            'age' => $validated['age'],
            'attitude' => $validated['attitude'],
            'gender_id' => $validated['gender_id'],
            'country_id' => $validated['country_id']
        ]);

        $kid->save();
        return response()->json($kid, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kid = Kid::find($id);

        if(!$kid){
            return response()->json(['message' => 'Kid not found'], 404);
        }

        $kid->delete();
        return response()->json(['message' => 'Kid deleted succesfully'], 200);
    }
}
