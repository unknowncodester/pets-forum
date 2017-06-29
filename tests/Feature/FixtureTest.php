<?php

namespace Tests\Feature;

use Tests\TestCase;

class FixtureTest extends TestCase
{
    public function webServiceCanBeReached()
    {
        $response = $this->json('get', '/fixtures');
        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function canGetTheFixtures()
    {
        $response = $this->json('get', '/fixtures');
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
     * @dataProvider fixtureDataProvider
     * @test
     */
    public function canGetAFixture($id, $homeTeam, $awayTeam)
    {
        $response = $this->json('get', '/fixtures/'.$id);
        $response->assertJson([
            'data' => [
                'id' => $id,
                'home_team' => $homeTeam,
                'away_team' => $awayTeam
            ]
        ]);
    }

    /**
     * @return array
     */
    public function fixtureDataProvider()
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

    /**
     * @test
     */
    public function canGetFixturesBetweenATimePeriod()
    {
        $response = $this->json('get', '/fixtures?date=2017-08-14&duration=10');
        $response->assertStatus(200);
    }
}

