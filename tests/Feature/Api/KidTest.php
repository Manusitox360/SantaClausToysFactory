<?php

namespace Tests\Feature\Api;

use Exception;
use App\Models\Kid;
use Tests\TestCase;
use App\Models\Country;
use Illuminate\Support\Facades\DB;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;

class KidTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;

    public function test_CheckIfReceiveAllEntryOfKidInJsonFile()
    {
        $this->seed(DatabaseSeeder::class);

        $response = $this->getJson(route('apiIndexKids'));

        $response->assertStatus(200)
            ->assertJsonCount(28);
    }

    public function test_CheckIfReceiveOneEntryOfKidInJsonFile()
    {
        $this->seed(DatabaseSeeder::class);

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
                'message' => 'Kid not found'
            ]);
    }

    public function test_StoreKidCreatesNewKidSuccessfully()
    {
        $this->seed(DatabaseSeeder::class);

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

    public function test_CheckIfTryingToCreateAKidWithAnInexistentCountry() {
        $this->seed(DatabaseSeeder::class);

        $response = $this->postJson(route('apiStoreKids'), [
            'name' => 'Juan',
            'surname' => 'Pérez',
            'image' => 'https://randomuser.me/api/portraits',
            'age' => 10,
            'attitude' => 0,
            'country_id' => 999,
            'gender_id' => 1
        ]);

        $response->assertStatus(404)
                 ->assertJson(['message' => 'Using An Inexisting country']);
    }

    public function test_CheckIfTryingToUpdateAKidWithAnInexistentCountry() {
        $this->seed(DatabaseSeeder::class);

        $response = $this->putJson(route('apiUpdateKids', 1), [
            'name' => 'Juan',
            'surname' => 'Pérez',
            'image' => 'https://randomuser.me/api/portraits',
            'age' => 10,
            'attitude' => 0,
            'country_id' => 999,
            'gender_id' => 1
        ]);

        $response->assertStatus(404)
                 ->assertJson(['message' => 'Using An Inexisting country']);
    }

    public function test_CheckIfTryingToCreateAKidWithAnInexistentGender() {
        $this->seed(DatabaseSeeder::class);

        $response = $this->postJson(route('apiStoreKids'), [
            'name' => 'Juan',
            'surname' => 'Pérez',
            'image' => 'https://randomuser.me/api/portraits',
            'age' => 10,
            'attitude' => 0,
            'country_id' => 1,
            'gender_id' => 999
        ]);

        $response->assertStatus(404)
                 ->assertJson(['message' => 'Using An Inexisting gender']);
    }

    public function test_CheckIfTryingToUpdateAKidWithAnInexistentGender() {
        $this->seed(DatabaseSeeder::class);

        $response = $this->putJson(route('apiUpdateKids', 1), [
            'name' => 'Juan',
            'surname' => 'Pérez',
            'image' => 'https://randomuser.me/api/portraits',
            'age' => 10,
            'attitude' => 0,
            'country_id' => 1,
            'gender_id' => 999
        ]);

        $response->assertStatus(404)
                 ->assertJson(['message' => 'Using An Inexisting gender']);
    }

    public function test_CheckIfUpdateKidModifiesKidSuccessfully()
    {
        $this->seed(DatabaseSeeder::class);

        $response = $this->putJson(route('apiUpdateKids', 1), [
            'name' => 'Juan',
            'surname' => 'Pérez',
            'image' => 'https://randomuser.me/api/portraits/men/10.jpg',
            'age' => 10,
            'attitude' => 0,
            'gender_id' => 1,
            'country_id' => 1
        ]);

        $response->assertStatus(200)
            ->assertJsonFragment([
                'name' => 'Juan',
            ]);
    }

    public function test_CheckIfUpdateKidReturns404WhenKidNotFound()
    {
        $response = $this->putJson(route('apiUpdateKids', 999), [
            'name' => 'Juan',
            'surname' => 'Pérez',
            'image' => 'https://randomuser.me/api/portraits/men/10.jpg',
            'age' => 10,
            'attitude' => 0,
            'gender_id' => 1,
            'country_id' => 1
        ]);

        $response->assertStatus(404)
            ->assertJson([
                'message' => 'Kid not found'
            ]);
    }

    public function test_CheckIfDeleteKidRemovesKidSuccessfully()
    {
        $this->seed(DatabaseSeeder::class);

        $response = $this->deleteJson(route('apiDestroyKids', 1));

        $response->assertStatus(204);
    }

    public function test_CheckIfDeleteKidReturns404WhenKidNotFound()
    {
        $response = $this->deleteJson(route('apiDestroyKids', 999));

        $response->assertStatus(404)
            ->assertJson([
                'message' => 'Kid not found'
            ]);
    }

    public function test_CheckIfCheckIfCorrectGenerateListOfGiftsWithApi()
    {
        $this->seed(DatabaseSeeder::class);

        $response = $this->postJson(route('apiSantaGifts'));

        $response->assertStatus(200);
    }

    public function test_CheckIfCheckIfWrongGenerateListOfGiftsWithApi()
    {
        $this->seed(DatabaseSeeder::class);

        DB::shouldReceive('table') // Le dice al framework que intercepte cualquier llamada al método table
            ->with('kid_toy') // Con el argumento de la tabla kid_toy
            ->andThrow(new Exception('Test Exception')); // Que lance un error

        $errorData = [
            'message' => 'Internal Server Error :('
        ];

        $response = $this->postJson(route('apiSantaGifts'));

        $response->assertStatus(500)
            ->assertJsonFragment($errorData);
    }
}
