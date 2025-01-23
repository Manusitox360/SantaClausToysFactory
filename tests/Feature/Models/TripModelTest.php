<?php

namespace Tests\Feature\Models;

use App\Models\ToyType;
use Tests\TestCase;
use App\Models\Trip;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TripModelTest extends TestCase
{
    use RefreshDatabase;

    public function test_CheckIfTripHasToyTypeRelationship()
    {
        $this->seed(DatabaseSeeder::class);

        $trip = Trip::first();

        $this->assertInstanceOf(ToyType::class, $trip->toyType);    
    }
}
