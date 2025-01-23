<?php

namespace App\Http\Controllers;

use App\Models\MinimumAge;
use App\Models\Toy;
use App\Models\ToyType;
use Illuminate\Http\Request;

class ToyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $toys = Toy::all();

        return view('elf', compact('toys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    /* public function create()
    {
        //
    } */

    /**
     * Store a newly created resource in storage.
     */
    /* public function store(Request $request)
    {
        //
    } */

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $toy = Toy::find($id);

        if (!$toy) {
            return redirect()->route('elf');
        }

        return view('elfShow', compact('toy'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    /* public function edit(Toy $toy)
    {
        //
    } */

    /**
     * Update the specified resource in storage.
     */
    /* public function update(Request $request, Toy $toy)
    {
        //
    } */

    /**
     * Remove the specified resource from storage.
     */
    /* public function destroy(Toy $toy)
    {
        //
    } */
}
