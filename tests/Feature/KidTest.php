<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Kid;
use Database\Seeders\GenderSeeder;
use Database\Seeders\CountrySeeder;
use Database\Seeders\KidSeeder;

class KidTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;
    
    public function test_indexReturnsViewWithKids()
    {
        $this->seed(GenderSeeder::class);
        $this->seed(CountrySeeder::class);
        $this->seed(KidSeeder::class);

        $response = $this->get(route('apiIndexKids'));

        $response->assertStatus(200)
            ->assertViewIs('santa')
            ->assertViewHas('kids', $kids);
    }
}