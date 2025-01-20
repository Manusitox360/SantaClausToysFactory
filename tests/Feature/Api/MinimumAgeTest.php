<?php

namespace Tests\Feature;

use Tests\TestCase;
use Database\Seeders\MinimumAgeSeeder;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MinimumAgeTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use refreshDatabase;

    public function test_checkIfCanGetAllAges(): void
    {
        $this->seed(MinimumAgeSeeder::class);

        $response = $this->getJson(route('apiIndexMinimumAge'));

        $response->assertStatus(200);
    }

    public function test_checkIfCanGetOneAge(): void
    {
        $this->seed(MinimumAgeSeeder::class);

        $response = $this->getJson(route('apiShowMinimumAge', 1));

        $data = ['id' => 1];

        $response->assertStatus(200)
            ->assertJsonFragment($data);
    }


    public function test_checkIfTryToGetAnAgeThatDoesntExist(): void
    {
        $this->seed(MinimumAgeSeeder::class);

        $response = $this->getJson(route('apiShowMinimumAge', 9999));

        $response->assertStatus(404)
            ->assertJsonFragment(['message' => 'Minimum Age Not Found']);
    }

    public function test_checkIfCanCreateOneAge(): void
    {
        $this->seed(MinimumAgeSeeder::class);

        $response = $this->postJson(route('apiStoreMinimumAge'), [
            'min' => 10,
            'max' => 15
        ]);
        $response->assertStatus(201)
            ->assertJsonFragment(['min' => 10, 'max' => 15]);
    }

    public function test_checkIfCanCreateOneAgeWithMaxNull(): void
    {
        $this->seed(MinimumAgeSeeder::class);

        $response = $this->postJson(route('apiStoreMinimumAge'),  [
            'min' => 18
        ]);

        $data = [
            'min' => 18,
            'max' => null
        ];

        $response->assertStatus(201)
            ->assertJsonFragment($data);
    }

    public function test_checkIfCanUpdateOneAge(): void
    {
        $this->seed(MinimumAgeSeeder::class);

        $response = $this->putJson(route('apiUpdateMinimumAge', 1),  [
            'min' => 10,
            'max' => 15
        ]);

        $response->assertStatus(200)
            ->assertJsonFragment(['min' => 10, 'max' => 15]);
    }

    public function test_checkIfCanUpdateOneAgeWithMaxNull(): void
    {
        $this->seed(MinimumAgeSeeder::class);

        $response = $this->putJson(route('apiUpdateMinimumAge', 1),  [
            'min' => 18
        ]);

        $minimumAge = $this->getJson(route('apiShowMinimumAge', 1));

        $response->assertStatus(200)
            ->assertJsonFragment(['min' => 18, 'max' => $minimumAge['max']]);
    }

    public function test_checkIfCanUpdateAnAgeThatDoesntExist(): void
    {
        $this->seed(MinimumAgeSeeder::class);

        $response = $this->putJson(route('apiUpdateMinimumAge', 9999),  [
            'min' => 12,
            'max' => 16
        ]);

        $response->assertStatus(404)
            ->assertJsonFragment(['message' => 'Minimum Age Not Found']);
    }

    public function test_checkIfCanDeleteOneAge(): void
    {
        $this->seed(MinimumAgeSeeder::class);

        $response = $this->deleteJson(route('apiDestroyMinimumAge', 1));

        $response->assertStatus(204);
    }

    public function test_checkIfTryToDeleteAnAgeThatDoesntExist(): void
    {
        $this->seed(MinimumAgeSeeder::class);

        $response = $this->deleteJson(route('apiDestroyMinimumAge', 9999));

        $response->assertStatus(404)
            ->assertJsonFragment(['message' => 'Minimum Age Not Found']);
    }
}
