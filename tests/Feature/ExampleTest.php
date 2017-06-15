<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');
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
        $response->assertJson($expected);
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
        $response->assertJson($expected);
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
}

