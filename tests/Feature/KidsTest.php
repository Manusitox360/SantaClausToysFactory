<?php

namespace Tests\Feature;

use App\Models\Kid;
use Tests\TestCase;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class KidsTest extends TestCase
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

        $response = $this->get(route('santa'));

        $response->assertStatus(200);

        $response->assertViewIs('santa');

        $response->assertViewHas('kids', function ($kids) {
            return $kids->count() > 0;
        });
    }
}