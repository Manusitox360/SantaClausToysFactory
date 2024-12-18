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

    public function store(Request $request, string $id)
    {
        $toys = Toy::create([
            'toy_id' => (int)$id,
            'toy' => $request->toy,
            'image' => $request->image,
            'description' => $request->description,
            'min_age' => $request->min_age
        ]);
        return response()->json($toys, 200); 
    }

    public function show(string $id)
    {
        return response()->json(Toy::find($id));
    }
 
    public function update(Request $request, string $id)
    {
        $toy = Toy::find($id)->toy;

        $toy->update([
            'toy_id' => $request->id,
            'toy' => $request->toy,
            'image' => $request->image,
            'description' => $request->description,
            'min_age' => $request->min_age
        ]);
        return response()->json($toy, 200); 
    }
    
    public function destroy(string $id)
    {
        Toy::find($id)->toy->delete();
    }
}
