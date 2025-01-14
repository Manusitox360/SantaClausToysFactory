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
    /**
     * A basic feature test example.
     */
    public function test_CheckIfHomePageCanBeRead(){
        $response = $this->get('/');
        $response->assertStatus(200)
                 ->assertViewIs('home');
                
    }
    public function test_CheckIfElfPageCanBeRead(){
        $this->seed(DatabaseSeeder::class);

        $toys = Toy::all();
        
        $response = $this->get('/elf');
        $response->assertStatus(200)
                ->assertViewIs('elf')
                ->assertViewHas('toys', $toys);
    }
    public function test_CheckIfElfPageHasCorrectMinimumAge(){
        $this->seed(DatabaseSeeder::class);

        $minimumAges = MinimumAge::all();

        $response = $this->get('/elf');
        $response->assertStatus(200)
                ->assertViewIs('elf')
                ->assertViewHas('minimumAges', $minimumAges);   
    
    }
    public function test_CheckIfElfPageHasCorrectToyType(){
        $this->seed(DatabaseSeeder::class);

        $toyTypes = ToyType::all();

        $response = $this->get('/elf');
        $response->assertStatus(200)
                ->assertViewIs('elf')
                ->assertViewHas('toyTypes', $toyTypes);
    }

    /* public function test_CheckIfElfShowViewCanBeRead(){
        $this->seed(DatabaseSeeder::class);

        $toy = Toy::first();

        $response = $this->get('/elf/'.$toy->id);
        $response->assertStatus(200)
                ->assertViewIs('elfShow');
    } */
}
