<?php

namespace Tests\Feature\Api;

use App\Models\Kid;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class KidsTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;

    public function test_CheckIfReceiveAllEntryOfKidInJsonFile(){
        $kid = Kid::factory(2)->create();

        $response = $this->get(route('apihome'));

        $response->assertStatus(200)
                 ->assertJsonCount(2);
    }


    public function test_CheckIfCanDeleteEntryInKidWithApi(){
        $kid = Kid::factory(2)->create();

        $response = $this->delete(route('apidestroy',1));
        $this->assertDatabaseCount('Kids',1);

        $response = $this->get(route('apihome'));

        $response->assertJsonCount(1);
    }


    public function test_CheckIfCanCreateNewEntryInKidWithJsonFile(){

        $response = $this->post(route('apistore'),[
            '' => '',
            '' => '',
            '' => '',
            '' => '',
        ]);

        $response = $this->get(route('apihome'));
        $response->assertStatus(200)
                 ->assertJsonCount(1);

    }


    public function test_CheckIfCanUpdateEntryInKidWithJsonFile(){

        $response = $this->post(route('apistore'),[
            '' => '',
            '' => '',
            '' => '',
            '' => '',
        ]);

        $data = ['' => ''];
        $response = $this->get(route('apihome'));
        $response->assertStatus(200)
                 ->assertJsonCount(1)
                 ->assertJsonFragment($data);

        $response = $this->put('/api/kids/1', [
            '' => '',
            '' => '',
            '' => '',
            '' => '',
        ]);

        $data = ['' => ''];
        $response = $this->get(route('apihome'));
        $response->assertStatus(200)
                 ->assertJsonCount(1)
                 ->assertJsonFragment($data);
}
}
