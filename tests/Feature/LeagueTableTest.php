<?php

namespace Tests\Feature;

use Tests\TestCase;

class LeagueTableTest extends TestCase
{
    public function webServiceCanBeReached()
    {
        $response = $this->json('get', '/league');
        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function canGetTheMatches()
    {
        $response = $this->json('get', '/league');
        $response->assertJson([
            'data' => [
                [
                    "games" => '3',
                    "name" => "Arsenal",
                    "wins" => '1',
                    "draws" => '1',
                    "losses" => '1',
                    "points" => '4',
                ],
                [
                    "games" => '1',
                    "name"  => "Bournemouth",
                    "wins"  => '1',
                    "draws" => '0',
                    "losses" => '0',
                    "points" => '3',
                ],
                [
                    "games" => '1',
                    "name" => "Burnley",
                    "wins" => '0',
                    "draws" => '1',
                    "losses" => '0',
                    "points" => '1',
                ],
                [
                    "games" => '1',
                    "name" => "Brighton & Hove Albion",
                    "wins" => '0',
                    "draws" => '0',
                    "losses" => '1',
                    "points" => '0',
                ]
            ]
        ]);
    }
}
