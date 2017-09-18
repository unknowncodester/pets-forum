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
                'id',
                'name',
                'home_matches' => [
                    [
                        'id',
                        'home_team_id',
                        'home_team_goals',
                        'away_team_id',
                        'away_team_goals',
                        'date'
                    ]
                ],
                'away_matches' => [
                    [
                        'id',
                        'home_team_id',
                        'home_team_goals',
                        'away_team_id',
                        'away_team_goals',
                        'date'
                    ]
                ]
            ]
        ];

        $this->json('get', '/teams/1/matches')
            ->assertJsonStructure($expected);
    }
}
