<?php

namespace Tests\Feature;

use Tests\TestCase;

class TeamFixtureTest extends TestCase
{
    /**
     * @test
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
        $expected = [
            'data' => [
                'home_fixtures' => [
                    'id',
                    'home_team',
                    'away_team',
                    'date'
                ],
                'away_fixtures' => [
                    'id',
                    'home_team',
                    'away_team',
                    'date'
                ]
            ]
        ];

        $this->json('get', '/teams/1/fixtures')
            ->assertJson($expected);
    }
}
