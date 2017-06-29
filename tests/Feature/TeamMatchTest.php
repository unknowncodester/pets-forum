<?php

namespace Tests\Feature;

use Tests\TestCase;

class TeamMatchTest extends TestCase
{
    /**
     * @test
     */
    public function webServiceCanBeReached()
    {
        $response = $this->json('get', '/teams/1/matches');
        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function canGetAllMatchesForATeam()
    {
        $expected = [
            'data' => [
                'home_matches' => [
                    [
                        'id',
                        'home_team',
                        'away_team',
                        'date'
                    ]
                ],
                'away_matches' => [
                    [
                        'id',
                        'home_team',
                        'away_team',
                        'date'
                    ]
                ]
            ]
        ];

        $this->json('get', '/teams/1/matches')
            ->assertJson($expected);
    }
}
