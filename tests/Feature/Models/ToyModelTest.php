<?php

namespace Tests\Feature\Models;

use App\Models\Kid;
use App\Models\Toy;
use Database\Seeders\DatabaseSeeder;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ToyModelTest extends TestCase
{
    use RefreshDatabase;

    public function test_CheckIfToyBelongsToManyKids()
    {
        $this->seed(DatabaseSeeder::class);
        $toy = Toy::first();

        $kids = Kid::inRandomOrder()->limit(3)->get();
        $toy->kids()->attach($kids->pluck('id'));

        $this->assertCount(3, $toy->kids);
    }
}
