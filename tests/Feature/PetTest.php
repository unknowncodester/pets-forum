<?php

namespace Tests\Feature;

use Tests\TestCase;

class PetTest extends TestCase
{
    const INVALID_PET_ID = '11';

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->json('get', '/pets');
        $response->assertStatus(200);
    }

    /**
     * Test can get all pets
     *
     * @return void
     */
    public function testPets()
    {
        $expected = [
            [
                "uid" => 1,
                "type"=> "dog",
                "name"=> "tess"
            ],
            [
                "uid"=> 2,
                "type"=>"cat",
                "name"=> "ginger"
            ],
            [
                "uid"=> 3,
                "type"=> "mouse",
                "name"=>"ratboy"
            ],
            [
                "uid"=> 4,
                "type"=>"rat",
                "name"=> "whitey"
            ]
        ];

        $response = $this->get('/pets');
        $response
            ->assertStatus(200)
            ->assertJson($expected);
    }

    /**
     * Test can get single pet
     *
     * @dataProvider petDataProvider
     * @return void
     */
    public function testGettingSinglePet($id, $type, $name)
    {
        $expected = [
            "uid" => $id,
            "type"=> $type,
            "name"=> $name
        ];

        $response = $this->get('/pets/'.$id);
        $response
            ->assertStatus(200)
            ->assertJson($expected);
    }

    /**
     * @return array
     */
    public function petDataProvider()
    {
        return [
            [
                "uid" => 1,
                "type"=> "dog",
                "name"=> "tess"
            ],
            [
                "uid"=> 2,
                "type"=>"cat",
                "name"=> "ginger"
            ],
            [
                "uid"=> 3,
                "type"=> "mouse",
                "name"=>"ratboy"
            ],
            [
                "uid"=> 4,
                "type"=>"rat",
                "name"=> "whitey"
            ]
        ];
    }

    /**
     * @test
     */
    public function canCreateAPet()
    {
        $response = $this->json(
            'POST',
            '/pets',
            [
                'type' => 'dog',
                'name' => 'rex'
            ]
        );

        $response
            ->assertStatus(200);

        $this->assertDatabaseHas('pet', [
            'type' => 'dog',
            'name' => 'rex'
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
            '/pets',
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
                    "The name field is required.",
                    "The type field is required."
                ]
            ],
            [
                [
                    "name" => 1,
                    "type" => 1
                ],
                [
                    "The name must be a string.",
                    "The type must be a string."
                ]
            ],
            [
                [
                    "name" => "aaaaaaaaaaaaaaaaaaaa",
                    "type" => "aaaaaaaaaaaaaaaaaaaa"
                ],
                [
                    "The name may not be greater than 15 characters.",
                    "The type may not be greater than 15 characters."
                ]
            ]
        ];
    }
}

