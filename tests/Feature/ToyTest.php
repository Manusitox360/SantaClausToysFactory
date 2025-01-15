<?php

namespace Tests\Feature;

use App\Models\Toy;
use App\Models\ToyType;
use App\Models\MinimumAge;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Foundation\Testing\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ToyTest extends TestCase
{
    use RefreshDatabase;

    public function test_CheckIfElfPageCanBeRead()
    {
        $this->seed(DatabaseSeeder::class);

        $toys = Toy::all();

        $response = $this->get(route('elf'));

        $response->assertStatus(200)
            ->assertViewIs('elf')
            ->assertViewHas('toys', $toys);
    }

    public function test_CheckIfElfShowViewCanBeRead()
    {
        $this->seed(DatabaseSeeder::class);

        $toy = Toy::first();

        $response = $this->get(route('elfShow', $toy->id));

        $response->assertStatus(200)
            ->assertViewIs('elfShow')
            ->assertViewHas('toy', $toy);
    }
}
