<?php

namespace Tests\Feature\Api;

use KidSeeder;
use App\Models\Kid;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class KidsTest extends TestCase
{
    /**
     * A basic feature test example.
     */

    private const EXPECTED_JSON_COUNT = 28;
    use RefreshDatabase;

    public function testCheckIfReceiveAllEntryOfKidInJsonFile(){
        $kidSeeder = $this->seed(KidSeeder::class);

        $Kidseeder->run();

        $response = $this->getJson(route('apiIndexKids'));

        $response->assertStatus(200);

        $response->assertJsonCount(self::EXPECTED_JSON_COUNT);
    }
}