<?php

namespace Tests\Feature\Models;

use Tests\TestCase;
use App\Models\ToyType;
use App\Models\Charcoal;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CharcoalModelTest extends TestCase
{
    use RefreshDatabase;
    public function test_CheckIfCharcoalHasToyTypeRelationship()
    {
        $this->seed(DatabaseSeeder::class);

        $charcoal = Charcoal::first();

        $this->assertInstanceOf(ToyType::class, $charcoal->toyType);    
    }
}
