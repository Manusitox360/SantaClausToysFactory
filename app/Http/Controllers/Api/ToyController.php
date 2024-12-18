<?php

namespace App\Http\Controllers\Api;

use App\Models\Toy;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ToyController extends Controller
{
    public function index()
    {
        return response()->json(Toy::all(), 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'string',
            'image' => 'string',
            'description' => 'string',
            'minimum_age_id' => 'integer'
        ]);
        
        $toy = Toy::create([
            'name' => $validated['name'],
            'image' => $validated['image'],
            'description' => $validated['description'],
            'minimum_age_id' => $validated['minimum_age_id']
        ]);
        $toy->save();
        return response()->json($toy, 201);
    }

    public function show(string $id)
    {
        $toy = Toy::find($id);
        return response()->json($toy, 200);
    }
 
    public function update(Request $request, string $id)
    {
        $toy = Toy::find($id);

        $validated = $request->validate([
            'name' => 'string',
            'image' => 'string',
            'description' => 'string',
            'minimum_age_id' => 'integer'
        ]);

        $toy->update([
            'name' => $validated['name'],
            'image' => $validated['image'],
            'description' => $validated['description'],
            'minimum_age_id' => $validated['minimum_age_id']
        ]);
        $toy->save();
        return response()->json($toy, 200);
    }

    public function destroy(string $id)
    {
        $toy = Toy::find($id);
        $toy->delete();
    }
}
