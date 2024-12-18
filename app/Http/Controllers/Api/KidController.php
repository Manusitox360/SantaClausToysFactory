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

    public function store(Request $request, string $id)
    {
        $kid = Kid::create([
            'kid_id' => (int)$id,
            'name' => $request->name,
            'surname' => $request->surname,
            'photo' => $request->photo,
            'age' => $request->age,
            'gender' => $request->gender,
            'atitude' => $request->atitude
        ]);
        $kid->save();
        return response()->json($kid, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $kid = Kid::find($id);
        return response()->json($kid, 200);
    }

    
    public function update(Request $request, string $id)
    {
        $kid = Kid::find($id);

        $kid->update([
            'kid_id' => (int)$id,
            'name' => $request->name,
            'surname' => $request->surname,
            'photo' => $request->photo,
            'age' => $request->age,
            'gender' => $request->gender,
            'atitude' => $request->atitude
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
        $kids = Kid::find($id);
        $kids->delete();
    }
}
