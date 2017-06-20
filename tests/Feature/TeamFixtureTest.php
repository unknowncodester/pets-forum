<?php

namespace Tests\Feature;

use Tests\TestCase;

class TeamFixtureTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @test
     * @return void
     */
    public function webServiceCanBeReached()
    {
        $response = $this->json('get', '/teams/1/fixtures');
        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function canGetAllFixturesForATeam()
    {
        $expected = json_decode(file_get_contents(__DIR__ . "/../Fixtures/singleteamallfixtures.json"), true);

        $response = $this->json('get', '/teams/1/fixtures');
        $response->assertJson($expected);
    }
}

