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

    public function test_CheckIfReceiveAllEntryOfkidInJsonFile(){
        $kid = kid::factory(2)->create();

        $response = $this->get(route('apiIndexKids'));

        $response->assertStatus(200)
                ->assertJsonCount(2);
    }
}