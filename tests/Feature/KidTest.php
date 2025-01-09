<?php

namespace Tests\Feature;

use App\Models\Kid;
use Illuminate\Foundation\Testing\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class KidTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_ListOfKidsCanBeRead(){
        $this->withoutExceptionHandling();

        Kid::all();

        $response = $this->get('/');
        $response->assertStatus(200)
                ->assertViewIs('home');
    }
}