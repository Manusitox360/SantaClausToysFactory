<?php

namespace Tests\Feature\Api;

use App\Models\Toy;
use Tests\TestCase;
use App\Models\ToyType;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ToyTest extends TestCase
{
    use RefreshDatabase;

    public function test_CheckIfCanGetAllTheToys(){
        $this->seed(DatabaseSeeder::class);
        
        $response = $this->getJson(route('apiIndexToys'));

        $response->assertStatus(200)
                 ->assertJsonCount(27);
    }

    public function test_CheckIfCanCreateAToy(){
        $this->seed(DatabaseSeeder::class);

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

    public function test_CheckIfCanShowJustOneToy(){
        $this->seed(DatabaseSeeder::class);

        Toy::factory(20)->create();

        $response = $this->getJson(route('apiShowToys', 1));

        $data = ['id' => 1];
        $response->assertStatus(200)
                 ->assertJsonFragment($data);
    }

    public function test_CheckIfCanUpdateAToy(){
        $this->seed(DatabaseSeeder::class);

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

    public function test_CheckIfCanDeleteAToy(){
        $this->seed(DatabaseSeeder::class);

        $response = $this->deleteJson(route('apiDestroyToys', 1));

        $response->assertStatus(204);
    }

    public function test_CheckIfTryToDeleteAToyThatDoesNotExist(){
        $this->seed(DatabaseSeeder::class);

        $response = $this->deleteJson(route('apiDestroyToys', 100));

        $response->assertStatus(404);
    }   

    public function test_CheckIfTryToShowAToyThatDoesNotExist(){
        $this->seed(DatabaseSeeder::class);

        $response = $this->getJson(route('apiShowToys', 100));

        $response->assertStatus(404);
    }
}
