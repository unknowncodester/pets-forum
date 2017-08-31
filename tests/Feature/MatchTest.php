<?php

namespace Tests\Feature;

use Tests\TestCase;

class MatchTest extends TestCase
{
    public function webServiceCanBeReached()
    {
        $response = $this->json('get', '/matches');
        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function canGetTheMatches()
    {
        $response = $this->json('get', '/matches');
        $response->assertJsonStructure([
            'data' => [
                [
                    'id',
                    'home_team',
                    'away_team'
                ]
            ]
        ]);
    }

    /**
     * @dataProvider matchDataProvider
     * @test
     */
    public function canGetAMatch($id, $homeTeam, $awayTeam)
    {
        $response = $this->json('get', '/matches/'.$id);
        $response->assertJsonStructure([
            'data' => [
                'id',
                'home_team_id',
                'home_team_goals',
                'away_team_id',
                'away_team_goals',
                'date',
                'home_team' => [
                    'name'
                ],
                'away_team' => [
                    'name'
                ],
            ]
        ]);
    }

    /**
     * @return array
     */
    public function matchDataProvider()
    {
        return [
            [
                'uid'       => '1',
                'home_team' => 'Arsenal',
                'away_team' => 'Bournemouth'
            ],
            [
                "uid"       => '2',
                "home_team" => "Arsenal",
                "away_team" => "Brighton & Hove Albion"
            ]
        ];
    }
}
