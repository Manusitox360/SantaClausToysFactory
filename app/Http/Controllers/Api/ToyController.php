<?php

namespace App\Http\Controllers\Api;

use App\Models\Toy;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ToyController extends Controller
{
    public function index()
    {
        $toys = Toy::all();

        return response()->json($toys, 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'image' => 'url',
            'description' => 'required|string',
            'toy_type_id' => 'required|integer|min:0',
            'minimum_age_id' => 'required|integer|min:0'
        ]);
        
        $toy = Toy::create([
            'name' => $validated['name'],
            'image' => $validated['image'],
            'description' => $validated['description'],
            'toy_type_id' => $validated['toy_type_id'],
            'minimum_age_id' => $validated['minimum_age_id']
        ]);

        $toy->save();

        return response()->json($toy, 201);
    }

    public function show(string $id)
    {
        $toy = Toy::find($id);

        if (!$toy){
            return response()->json(['message' => 'Toy not found'], 404);
        }

        return response()->json($toy, 200);
    }
 
    public function update(Request $request, string $id)
    {
        $toy = Toy::find($id);

        $validated = $request->validate([
            'name' => 'string',
            'image' => 'url',
            'description' => 'string',
            'toy_type_id' => 'integer|min:0',
            'minimum_age_id' => 'integer|min:0'
        ]);

        $toy->update([
            'name' => $validated['name'],
            'image' => $validated['image'],
            'description' => $validated['description'],
            'toy_type_id' => $validated['toy_type_id'],
            'minimum_age_id' => $validated['minimum_age_id']
        ]);

        $toy->save();

        return response()->json($toy, 200);
    }

    public function destroy(string $id)
    {
        $toy = Toy::find($id);

        if (!$toy){
            return response()->json(['message' => 'Toy not found'], 404);
        }

        $toy->delete();

        return response()->json([], 204);
    }
}
