<?php

namespace Tests\Feature\Models;

use App\Models\Toy;
use Tests\TestCase;
use App\Models\MinimumAge;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MinimumAgeModelTest extends TestCase
{
    use RefreshDatabase;

    public function test_CheckIfMinimumAgeHasToysRelationship()
    {
        $this->seed(DatabaseSeeder::class);

        $minimumAge = MinimumAge::first();
        $toys = Toy::where('minimum_age_id', $minimumAge->id);

        $this->assertInstanceOf(Toy::class, $minimumAge->toys->first());
    }

    public function test_CheckIfMinimumAgeToStringMethodReturnsCorrectString()
    {
        $minimumAge = new MinimumAge();
        $minimumAge->min = 0;
        $minimumAge->max = 0;

        $this->assertEquals('All ages', $minimumAge->__toString());

        $minimumAge->min = 18;
        $minimumAge->max = 0;

        $this->assertEquals('+18', $minimumAge->__toString());

        $minimumAge->min = 3;
        $minimumAge->max = 5;

        $this->assertEquals('3-5', $minimumAge->__toString());
    }
}