<?php

namespace Tests\Feature\Models;

use App\Models\Toy;
use Tests\TestCase;
use App\Models\ToyType;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ToyTypeModelTest extends TestCase
{
    use RefreshDatabase;

    public function test_CheckIfToyTypeHasManyToys() {
        
        $this->seed(DatabaseSeeder::class);

        $toyType = ToyType::first();
        $toys = Toy::where('toy_type_id', $toyType->id);

        $this->assertInstanceOf(Toy::class, $toyType->toys->first());
        
    }
}
