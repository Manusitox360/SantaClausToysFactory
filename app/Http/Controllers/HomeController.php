<?php

namespace App\Http\Controllers;

use App\Models\Kid;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $totalKids = Kid::count();
        $goodKids = Kid::where('attitude', true)->count();
        $badKids = Kid::where('attitude', false)->count();
        $kids = Kid::all();

        return view('home', compact('totalKids', 'goodKids', 'badKids', 'kids'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Kid $kid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kid $kid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kid $kid)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kid $kid)
    {
        //
    }
}
