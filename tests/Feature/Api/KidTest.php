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

        $response = $this->getJson(route('apiShowKids', 1));
        
        $data = ['id' => 1];

        $response->assertStatus(200)
            ->assertJsonFragment($data);
    }

    public function test_CheckIfShowReturns404WhenKidNotFound()
    {
        $response = $this->getJson(route('apiShowKids', 999));

        $response->assertStatus(404)
                 ->assertJson([
                     'message' => 'Kid not found']);
    }

    public function test_StoreKidCreatesNewKidSuccessfully()
    {
        $this->seed(GenderSeeder::class);
        $this->seed(CountrySeeder::class);

        $response = $this->postJson(route('apiStoreKids'), [
            'name' => 'Juan',
            'surname' => 'Pérez',
            'image' => 'https://randomuser.me/api/portraits/men/10.jpg',
            'age' => 10,
            'attitude' => 0,
            'gender_id' => 1,
            'country_id' => 1
        ]);

        $response->assertStatus(201)
            ->assertJsonFragment([
                'name' => 'Juan',
            ]);
    }
}