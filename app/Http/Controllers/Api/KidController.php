<?php

namespace App\Http\Controllers\Api;

use App\Models\Kid;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KidController extends Controller
{
    public function index()
    {
        //
        $kids = Kid::all();
        return response()->json($kids , 200);
    }

    public function store(Request $request)
    {
        $kid = Kid::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'image' => $request->photo,
            'age' => $request->age,
            'attitude' => $request->attitude
        ]);
        $kid->save();
        return response()->json($kid, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        $kid->update([
            'name' => $request->name,
            'surname' => $request->surname,
            'image' => $request->photo,
            'age' => $request->age,
            'attitude' => $request->attitude
        ]);
        $kid->save();
        return response()->json($kid, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $kid = Kid::find($id);
        if(!$kid){
            return response()->json(['message' => 'Kid not found'], 404);
        }
        $kid->delete();
    }
}
