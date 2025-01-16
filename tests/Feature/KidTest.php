<?php

namespace Tests\Feature;

use App\Models\Kid;
use Tests\TestCase;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;

class KidTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;

    public function test_CheckIfListOfKidsCanBeRead()
    {
        $this->seed(DatabaseSeeder::class);

        $response = $this->get(route('santa'));

        $response->assertStatus(200)
            ->assertViewIs('santa');
    }

    public function test_CheckIfSingleKidCanBeRead()
    {
        $this->seed(DatabaseSeeder::class);

        $kid = Kid::first();

        $response = $this->get(route('santaShow', $kid->id));

        $response->assertStatus(200)
            ->assertViewIs('santaShow');
    }

    public function test_CheckIfFailSingleKidCanBeRead()
    {
        $this->seed(DatabaseSeeder::class);

        $response = $this->get(route('santaShow', 9999));

        $response->assertStatus(302)
            ->assertRedirect('santa');
    }

    public function test_CheckIfCorrectGenerateListOfGifts()
    {
        $this->seed(DatabaseSeeder::class);

        $response = $this->get(route('santaGifts'));

        $response->assertStatus(200)
            ->assertViewIs('gift');
    }
}
