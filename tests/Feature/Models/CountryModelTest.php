<?php

namespace Tests\Feature\Models;

use App\Models\Country;
use App\Models\Kid;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CountryModelTest extends TestCase
{
    public function test_CheckIfCountryHasKidsRelationship()
    {
        $this->seed(DatabaseSeeder::class);

        $country = Country::first();
        $kids = Kid::where('country_id', $country->id);

        $this->assertInstanceOf(Kid::class, $country->kids->first());
    }
}
