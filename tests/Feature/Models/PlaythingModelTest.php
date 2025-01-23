<?php

namespace Tests\Feature\Models;

use App\Models\Kid;
use Tests\TestCase;
use App\Models\Plaything;
use App\Models\ToyType;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PlaythingModelTest extends TestCase
{
    use RefreshDatabase;

    public function test_CheckIfPlaythingHasToyTypeRelationship()
    {
        $this->seed(DatabaseSeeder::class);
        
        $plaything = Plaything::first();

        $this->assertInstanceOf(ToyType::class, $plaything->toyType);
    }
}
