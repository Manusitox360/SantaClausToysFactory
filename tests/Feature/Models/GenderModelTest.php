<?php

namespace Tests\Feature\Models;

use App\Models\Kid;
use Tests\TestCase;
use App\Models\Gender;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GenderModelTest extends TestCase
{
    use RefreshDatabase;

    public function test_CheckIfGenderHasKidsRelationship()
    {
        $this->seed(DatabaseSeeder::class);

        $gender = Gender::first();
        $kids = Kid::where('gender_id', $gender->id);

        $this->assertInstanceOf(Kid::class, $gender->kids->first());
    }
}
