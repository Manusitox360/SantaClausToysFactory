<?php

namespace Tests\Feature;

use App\Models\Toy;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ToysTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_ListOfEntryCanBeRead(){
        $this->withoutExceptionHandling();

        Toy::all();

        $response = $this->get('/');
        $response->assertStatus(200)
                ->assertViewIs('home');
    }
}
