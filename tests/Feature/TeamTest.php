<?php

namespace Tests\Feature;

use Tests\TestCase;

class TeamTest extends TestCase
{
    public function webServiceCanBeReached()
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
                "id" => 1,
                "name"=> "Arsenal"
            ],
            [
                "id" => 2,
                "name"=> "Bournemouth"
            ]
        ];

        $response = $this->get('/teams');
        $response
            ->assertStatus(200)
            ->assertJson(['data' => $expected]);
    }

    /**
     * Test can get single team
     *
     * @dataProvider teamDataProvider
     * @return void
     */
    public function testGettingSingleTeam($id, $name)
    {
        $expected = [
            "id" => $id,
            "name"=> $name
        ];

        $response = $this->get('/teams/'.$id);
        $response
            ->assertStatus(200)
            ->assertJson(['data' => $expected]);
    }

    /**
     * @return array
     */
    public function teamDataProvider()
    {
        return [
            [
                "id" => 1,
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
            ->assertStatus(201);

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

