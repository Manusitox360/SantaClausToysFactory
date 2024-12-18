<?php

namespace Tests\Feature\Api;

use App\Models\Kid;
use App\Models\Toy;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ToysTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;

    public function test_CheckIfCanCreateNewEntryInToyWithJsonFile(){

        Kid::create([
            '' => '',
            '' => '',
            '' => '',
            '' => '',
        ]);

        $response = $this->post(route('apistoreToy',1),[
            'kid_id' => '',
            '' => ''
        ]);

        $response = $this->get(route('apihome'));
        $response->assertStatus(200)
                 ->assertJsonCount(1);

    }

    public function test_GetElements()
    {
        Kid::create([
            '' => '',
            '' => '',
            '' => '',
            '' => '',
        ]);
        Toy::create([
            '' => '',
            'kid_id' => '',
        ]);

        $response = $this->get('/api/kids/1/toys');

        $response->assertStatus(200)->assertJsonFragment([
            '' => '',
            'kid_id' => '',
        ]);
    }



    public function test_GetElementsById()
    {
        Kid::create([
            '' => '',
            '' => '',
            '' => '',
            '' => '',
        ]);
        Toy::create([
            '' => '',
            'kid_id' => '',
        ]);

        $response = $this->get('/api/kids/1/toys/1');

        $response->assertStatus(200)->assertJsonFragment(['kid_id' => '']);
    }


    public function test_DeleteElement()
    {
        Kid::create([
            '' => '',
            '' => '',
            '' => '',
            '' => '',
        ]);
        Toy::create([
            '' => '',
            'kid_id' => '',
        ]);
        
        $response = $this->delete('/api/kids/1/toys/1');
        $this->assertDatabaseCount('toys', 0);
    }


    public function test_UpdateElements()
    {
        Kid::factory(10)->create();
        Toy::factory(1)->create([
            '' => '',
            'kid_id' => '',
        ]);
        
        $response = $this->put('/api/kids/1/toys/1',
        [
            '' => '',
            'kid_id' => '',
        ]);

        $response = $this->get('/api/kids/1/toys/1');

        $response->assertStatus(200)->assertJsonFragment([

            'kid_id' => '',
            '' => '',
        ]);
    }
}