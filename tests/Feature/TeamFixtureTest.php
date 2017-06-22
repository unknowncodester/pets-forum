<?php

namespace Tests\Feature;

use Tests\TestCase;

class TeamFixtureTest extends TestCase
{
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

        $this->json('get', '/teams/1/fixtures')
            ->assertJson($expected);
    }
}

