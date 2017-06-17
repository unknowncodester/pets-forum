<?php

namespace Tests\Feature;

use Tests\TestCase;

class TeamTest extends TestCase
{
    const INVALID_TEAM_ID = '100000';

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->json('get', '/teams');
        $response->assertStatus(200);
    }

    /**
     * Test can get all teams
     *
     * @return void
     */
    public function testTeams()
    {
        $expected = [
            [
                "uid" => 1,
                "name"=> "Arsenal"
            ],
            [
                "uid" => 2,
                "name"=> "Bournemouth"
            ],
        ];

        $response = $this->get('/teams');
        $response
            ->assertStatus(200)
            ->assertJson($expected);
    }

    /**
     * Test can get single team
     *
     * @dataProvider teamDataProvider
     * @return void
     */
    public function testGettingSinglePet($id, $name)
    {
        $expected = [
            "uid" => $id,
            "name"=> $name
        ];

        $response = $this->get('/teams/'.$id);
        $response
            ->assertStatus(200)
            ->assertJson($expected);
    }

    /**
     * @return array
     */
    public function teamDataProvider()
    {
        return [
            [
                "uid" => 1,
                "name"=> "Arsenal"
            ],
            [
                "uid" => 2,
                "name"=> "Bournemouth"
            ]
        ];
    }

    /**
     * @test
     */
    public function canCreateATeam()
    {
        $response = $this->json(
            'POST',
            '/teams',
            [
                'name' => 'Bolton'
            ]
        );

        $response
            ->assertStatus(200);

        $this->assertDatabaseHas('teams', [
            'name' => 'Bolton'
        ]);
    }

    /**
     * @dataProvider invalidDataProvider
     * @test
     */
    public function invalidDataForPostCauses400WithErrorMessage($invalidData, $expected)
    {
        $response = $this->json(
            'POST',
            '/teams',
            $invalidData
        );

        $response
            ->assertStatus(400)
            ->assertJson($expected);
    }

    public function invalidDataProvider()
    {
        return [
            [
                [

                ],
                [
                    "The name field is required."
                ]
            ],
            [
                [
                    "name" => 1,
                ],
                [
                    "The name must be a string.",
                ]
            ],
            [
                [
                    "name" => "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                ],
                [
                    "The name may not be greater than 30 characters.",
                ]
            ]
        ];
    }
}

