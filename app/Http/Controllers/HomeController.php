<?php

namespace App\Http\Controllers;

use App\Models\Kid;
use App\Models\Toy;
use App\Models\MinimumAge;
use Illuminate\Http\Request;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

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

        $ageRanges = MinimumAge::withCount('toys')->whereNot('min', 0)->whereNot('max', null)->get();
        $totalToys = Toy::count();

        $chart_options = [
            'chart_title' => 'Kids',
            'report_type' => 'group_by_string',
            'model' => 'App\Models\Kid',
            'group_by_field' => 'attitude',
            'group_by_period' => 'month',
            'chart_type' => 'pie',
        ];
        $chart = new LaravelChart($chart_options);

        $chart_options = [
            'chart_title' => 'Toys',
            'report_type' => 'group_by_relationship',
            'model' => 'App\Models\Toy',
            'group_by_field' => 'min',
            'relationship_name' => 'minimumAge',
            'group_by_period' => 'month',
            'chart_type' => 'pie',
        ];
        $chart2 = new LaravelChart($chart_options);
        
        return view('home', compact('totalKids','goodKids', 'badKids', 'kids', 'ageRanges', 'totalToys','chart', 'chart2'));
    }

    /* /**
     * Show the form for creating a new resource.
     */
    /* public function create()
    {
        //
    }

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
    /* public function show(Kid $kid)
    {
        //
    } */

    /**
     * Show the form for editing the specified resource.
     */
    /* public function edit(Kid $kid)
    {
        //
    } */

    /**
     * Update the specified resource in storage.
     */
    /* public function update(Request $request, Kid $kid)
    {
        //
    } */

    /**
     * Remove the specified resource from storage.
     */
    /* public function destroy(Kid $kid)
    {
        //
    } */
   private function getGrapihcs(){

   }
}
