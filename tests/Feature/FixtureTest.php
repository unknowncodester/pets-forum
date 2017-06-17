<?php

namespace Tests\Feature;

use Tests\TestCase;

class FixtureTest extends TestCase
{
    /**
     * A basic test example.
     * @test
     * @return void
     */
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
        $response->assertJson([
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
            'uid' => $id,
            'home_team' => $homeTeam,
            'away_team' => $awayTeam
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
}

