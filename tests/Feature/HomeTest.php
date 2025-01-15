<?php

namespace Tests\Feature;

use App\Models\Kid;
use App\Models\Toy;
use Tests\TestCase;
use App\Models\MinimumAge;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HomeTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;

    public function test_CheckIfKidCountsAreCorrect()
    {
        $this->seed(DatabaseSeeder::class);

        $goodKidsCount = Kid::where('attitude', 1)->count();
        $badKidsCount = Kid::where('attitude', 0)->count();
        $totalKidsCount = Kid::count();
    
        $response = $this->get(route('home'));
    
        $response->assertViewHas('totalKids', $totalKidsCount);
        $response->assertViewHas('goodKids', $goodKidsCount);
        $response->assertViewHas('badKids', $badKidsCount);
    }

    public function test_CheckIfToyCountsAreCorrect()
    {
        $this->seed(DatabaseSeeder::class);

        $totalToysCount = Toy::count();

        $ageRangesWithToysCount = MinimumAge::withCount('toys')->get();
        $ageRanges = MinimumAge::withCount('toys')->whereNot('min', 0)->whereNot('max', null)->get();
        
        $response = $this->get(route('home'))
        ->assertViewHas('totalToys', $totalToysCount)
        ->assertViewHas('ageRanges', $ageRanges);
    }
}
