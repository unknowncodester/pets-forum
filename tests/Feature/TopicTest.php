<?php

namespace Tests\Feature;

use App\Topic;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TopicTest extends TestCase
{
    use DatabaseMigrations;

    public function setUp()
    {
        parent::setUp();
        $flight = new Topic;
        $flight->name = "Past Premier League Teams";
        $flight->save();
    }

    /**
     * @test
     */
    public function webServiceCanBeReached()
    {
        $response = $this->json('get', '/topics');
        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function getAllTopics()
    {
        $expected = [
            [
                'name' => 'Past Premier League Teams'
            ]
        ];

        $response = $this->json('get', '/topics');
        $response->assertJson(['data' => $expected]);
    }
}

