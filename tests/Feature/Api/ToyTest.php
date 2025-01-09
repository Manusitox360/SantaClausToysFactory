<?php

namespace Tests\Feature\Api;

use App\Models\Toy;
use App\Models\ToyType;
use Tests\TestCase;
use Database\Seeders\ToySeeder;
use Illuminate\Database\Seeder;
use Database\Seeders\MinimumAgeSeeder;
use Database\Seeders\ToyTypeSeeder;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ToyTest extends TestCase
{
    use RefreshDatabase;

    public function test_IfCanGetAllTheToys()
    {
        $this->seed(MinimumAgeSeeder::class);
        $this->seed(ToyTypeSeeder::class);
        Toy::factory(20)->create();
        
        $response = $this->getJson(route('apiIndexToys'));

        $response->assertStatus(200)
                 ->assertJsonCount(20);
    }

    public function test_IfCanCreateAToy()
    {
        $this->seed(MinimumAgeSeeder::class);
        $this->seed(ToyTypeSeeder::class);

        $response = $this->postJson(route('apiStoreToys'), [
            'name' => 'Test Toy',
            'image' => 'https://via.placeholder.com/150',
            'description' => 'Test Description',
            'toy_type_id' => 1,
            'minimum_age_id' => 1
        ]);

        $response->assertStatus(201)
                 ->assertJsonFragment([
                     'name' => 'Test Toy'
                 ]);
    }

    public function test_IfCanShowJustOneToy()
    {
        $this->seed(MinimumAgeSeeder::class);
        $this->seed(ToyTypeSeeder::class);
        Toy::factory(20)->create();

        $response = $this->getJson(route('apiShowToys', 1));

        $data = ['id' => 1];
        $response->assertStatus(200)
                 ->assertJsonFragment($data);
    }

    public function test_IfCanUpdateAToy()
    {
        $this->seed(MinimumAgeSeeder::class);
        $this->seed(ToyTypeSeeder::class);
        $this->seed(ToySeeder::class);

        $response = $this->putJson(route('apiUpdateToys', 1), [
            'name' => 'Test Toy Updated',
            'image' => 'https://via.placeholder.com/150',
            'description' => 'Test Description Updated',
            'toy_type_id' => 1,
            'minimum_age_id' => 1
        ]);

        $response->assertStatus(200)
                    ->assertJsonFragment([
                        'name' => 'Test Toy Updated'
                    ]);
    }

    public function test_IfCanDeleteAToy()
    {
        $this->seed(MinimumAgeSeeder::class);
        $this->seed(ToyTypeSeeder::class);
        $this->seed(ToySeeder::class);

        $response = $this->deleteJson(route('apiDestroyToys', 1));

        $response->assertStatus(200);
    }

    public function test_IfTryToDeleteAToyThatDoesntExist()
    {
        $this->seed(MinimumAgeSeeder::class);
        $this->seed(ToyTypeSeeder::class);
        $this->seed(ToySeeder::class);

        $response = $this->deleteJson(route('apiDestroyToys', 100));

        $response->assertStatus(404);
    }   

    public function test_IfTryToShowAToyThatDoesntExist()
    {
        $this->seed(MinimumAgeSeeder::class);
        $this->seed(ToyTypeSeeder::class);
        $this->seed(ToySeeder::class);

        $response = $this->getJson(route('apiShowToys', 100));

        $response->assertStatus(404);
    }
}
