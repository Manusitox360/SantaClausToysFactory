<?php

namespace Tests\Feature\Api;

use App\Models\Gender;
use Database\Seeders\GenderSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GenderTest extends TestCase
{
    use RefreshDatabase;

    public function test_CheckIfCanGetAllGenders() {
        $this->seed(GenderSeeder::class);

        $response = $this->getJson(route('apiIndexGenders'));
        $response->assertStatus(200);
    }

    public function test_CheckIfCanGetJustOneGender() {
        $this->seed(GenderSeeder::class);

        $response = $this->getJson(route('apiShowGenders', 1));
        
        $data = ['id' => 1];

        $response->assertStatus(200)
                 ->assertJsonFragment($data);
    }

    public function test_CheckIfTryToGetAGenderThatDoesntExist() {
        $this->seed(GenderSeeder::class);

        $response = $this->getJson(route('apiShowGenders', 100));

        $response->assertStatus(404)
                 ->assertJsonFragment(['message' => 'Gender not found']);
    }

    public function test_CheckIfCanCreateAGender() {
        $this->seed(GenderSeeder::class);

        $response = $this->postJson(route('apiStoreGenders'), [
            'name' => 'NonBinary'
        ]);

        $response->assertStatus(201)
                 ->assertJsonFragment(['name' => 'NonBinary']);
    }

    public function test_CheckIfCanUpdateAGender() {
        $this->seed(GenderSeeder::class);

        $response = $this->putJson(route('apiUpdateGenders', 1), [
            'name' => 'Male'
        ]);

        $response->assertStatus(200)
                 ->assertJsonFragment(['name' => 'Male']);
    }

    public function test_CheckIfTryToUpdateAGenderThatDoesntExist() {
        $this->seed(GenderSeeder::class);

        $response = $this->putJson(route('apiUpdateGenders', 100), [
            'name' => 'Male'
        ]);

        $response->assertStatus(404)
                 ->assertJsonFragment(['message' => 'Gender not found']);
    }

    public function test_CheckIfCanDeleteAGender() {
        $this->seed(GenderSeeder::class);

        $response = $this->deleteJson(route('apiDestroyGenders', 1));

        $response->assertStatus(200)
                 ->assertJsonFragment(['message' => 'Gender deleted']);
    }

    public function test_CheckIfTryToDeleteAGenderThatDoesntExist() {
        $this->seed(GenderSeeder::class);

        $response = $this->deleteJson(route('apiDestroyGenders', 100));

        $response->assertStatus(404)
                 ->assertJsonFragment(['message' => 'Gender not found']);
    }
}
