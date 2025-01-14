<?php

namespace App\Http\Controllers\Api;

use App\Models\MinimumAge;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MinimumAgeController extends Controller
{

    public function index()
    {
        $minimumAges = MinimumAge::all();

        return response()->json($minimumAges, 200);
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'min' => 'required|integer|min:0',
            'max' => 'nullable|integer|gte:min',
        ]);

        $minimumAges = MinimumAge::create([
            'min' => $validated['min'],
            'max' => $validated['max']
        ]);

        $minimumAges->save();

        return response()->json(['message' => 'Minimum Age Created Succesfully', 'data' => $minimumAges], 201);
    }


    public function show(string $id)
    {
        $minimumAge = MinimumAge::find($id);

        if (!$minimumAge) {
            return response()->json(['message' => 'Minimmum Age not found'], 404);
        }

        return response()->json($minimumAge, 200);
    }


    public function update(Request $request, string $id)
    {
        $minimumAge = MinimumAge::find($id);

        if (!$minimumAge) {
            return response()->json(['message' => 'Minimum Age Not Found'], 404);
        }

        $validated = $request->validate([
            'min' => 'required|integer|min:0',
            'max' => 'nullable|integer|gte:min'
        ]);

        $minimumAge->update([
            'min' =>  $validated['min'],
            'max' => $validated['max']
        ]);

        $minimumAge->save();

        return response()->json(['message' => 'Minimum Age Updated Succesfully', 'data' => $minimumAge],  200);
    }


    public function destroy(string $id)
    {
        $minimumAge = MinimumAge::find($id);

        if (!$minimumAge) {
            return response()->json(['message' => 'Minimum Age not found'], 404);
        }

        $minimumAge->delete();

        return response()->json([], 204);
    }
}
