<?php

namespace Tests\Feature;

use App\Models\Toy;
use App\Models\ToyType;
use App\Models\MinimumAge;
use Database\Seeders\ToySeeder;
use Database\Seeders\ToyTypeSeeder;
use Database\Seeders\MinimumAgeSeeder;
use Illuminate\Foundation\Testing\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ToyTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_HomePageCanBeRead(){
        
        $this->withoutExceptionHandling();

        $response = $this->get('/');
        $response->assertStatus(200)
                 ->assertViewIs('home');
                
    }
    public function test_ElfPageCanBeRead(){
        $this->withoutExceptionHandling();
        $this->seed(MinimumAgeSeeder::class);
        $this->seed(ToyTypeSeeder::class);
        $this->seed(ToySeeder::class);

        $toys = Toy::all();
        
        $response = $this->get('/elf');
        $response->assertStatus(200)
                ->assertViewIs('elf')
                ->assertViewHas('toys', $toys);
    }
    public function test_ElfPageHasCorrectMinimumAge(){
    $this->withoutExceptionHandling();
    $this->seed(MinimumAgeSeeder::class);
    $this->seed(ToyTypeSeeder::class);
    $this->seed(ToySeeder::class);

    $minimumAges = MinimumAge::all();

    $response = $this->get('/elf');
    $response->assertStatus(200)
            ->assertViewIs('elf')
            ->assertViewHas('minimumAges', $minimumAges);   
    
    }
    public function test_ElfPageHasCorrectToyType(){
        $this->withoutExceptionHandling();
        $this->seed(MinimumAgeSeeder::class);
        $this->seed(ToyTypeSeeder::class);
        $this->seed(ToySeeder::class);
        $toyTypes = ToyType::all();
        $response = $this->get('/elf');
        $response->assertStatus(200)
                ->assertViewIs('elf')
                ->assertViewHas('toyTypes', $toyTypes);
    }

    /* public function test_ElfShowViewCanBeRead(){
        $this->withoutExceptionHandling();
        $this->seed(MinimumAgeSeeder::class);
        $this->seed(ToyTypeSeeder::class);
        $this->seed(ToySeeder::class);

        $toy = Toy::first();

        $response = $this->get('/elf/'.$toy->id);
        $response->assertStatus(200)
                ->assertViewIs('elfShow');
    } */
}
