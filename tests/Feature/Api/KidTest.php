<?php

namespace Tests\Feature\Api;

use App\Models\Kid;
use Tests\TestCase;
use Database\Seeders\KidSeeder;
use Database\Seeders\GenderSeeder;
use Database\Seeders\CountrySeeder;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class KidTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;

    public function test_CheckIfReceiveAllEntryOfKidInJsonFile(){
        $this->seed(GenderSeeder::class);
        $this->seed(CountrySeeder::class);
        $this->seed(KidSeeder::class);

        $response = $this->getJson(route('apiIndexKids'));

        $response->assertStatus(200)
            ->assertJsonCount(28);
    }

    public function test_CheckIfReceiveOneEntryOfKidInJsonFile(){
        $this->seed(GenderSeeder::class);
        $this->seed(CountrySeeder::class);
        $this->seed(KidSeeder::class);

        $kid = Kid::find(1);

        $response = $this->get(route('apiShowKids', 1));
        
        $data = ['id' => 1];

        $response->assertStatus(200)
            ->assertJsonFragment($data);
    }

    public function test_CheckIfSwowReturns404WhenKidNotFound()
    {
        $response = $this->get(route('apiShowKids', 999));

        $response->assertStatus(404)
                 ->assertJson([
                     'message' => 'Kid not found']);
    }
}