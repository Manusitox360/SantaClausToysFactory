<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use Database\Seeders\CountrySeeder;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CountryTest extends TestCase
{
    use RefreshDatabase;

    public function test_CheckIfCanGetAllTheCountries() {
        $this->seed(CountrySeeder::class);

        $response = $this->getJson(route('apiIndexCountries'));
        $response->assertStatus(200);
    }

    public function test_CheckIfCanGetJustOneCountry() {
        $this->seed(CountrySeeder::class);

        $response = $this->getJson(route('apiShowCountries', 1));
        
        $data = ['id' => 1];

        $response->assertStatus(200)
                 ->assertJsonFragment($data);
    }

    public function test_CheckIfTryToGetACountryThatDoesntExist() {
        $this->seed(CountrySeeder::class);

        $response = $this->getJson(route('apiShowCountries', 100));

        $response->assertStatus(404)
                 ->assertJsonFragment(['message' => 'Country not found']);
    }

    public function test_CheckIfCanCreateACountry() {
        $this->seed(CountrySeeder::class);

        $response = $this->postJson(route('apiStoreCountries'), [
            'name' => 'Japan'
        ]);

        $response->assertStatus(201)
                 ->assertJsonFragment(['name' => 'Japan']);
    }

    public function test_CheckIfCanUpdateACountry() {
        $this->seed(CountrySeeder::class);

        $response = $this->putJson(route('apiUpdateCountries', 1), [
            'name' => 'Canada'
        ]);

        $response->assertStatus(200)
                 ->assertJsonFragment(['name' => 'Canada']);
    }

    public function test_CheckIfTryToUpdateACountryThatDoesntExist() {
        $this->seed(CountrySeeder::class);

        $response = $this->putJson(route('apiUpdateCountries', 100), [
            'name' => 'Canada'
        ]);

        $response->assertStatus(404)
                 ->assertJsonFragment(['message' => 'Country not found']);
    }

    public function test_CheckIfCanDeleteACountry() {
        $this->seed(CountrySeeder::class);

        $response = $this->deleteJson(route('apiDestroyCountries', 1));

        $response->assertStatus(200)
                 ->assertJsonFragment(['message' => 'Country deleted']);
    }

    public function test_CheckIfTryToDeleteACountryThatDoesntExist() {
        $this->seed(CountrySeeder::class);

        $response = $this->deleteJson(route('apiDestroyCountries', 100));

        $response->assertStatus(404)
                 ->assertJsonFragment(['message' => 'Country not found']);
    }
}
