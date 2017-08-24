<?php

namespace Tests\Feature;

use Tests\TestCase;

class TopicTest extends TestCase
{
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
                'name'
            ]
        ];

        $response = $this->json('get', '/topics');
        $response->assertJsonStructure(['data' => $expected]);
    }

    /**
     * @test
     */
    public function getASingleTopic()
    {
        $expected = [
            'name'
        ];

        $response = $this->json('get', '/topics/1');
        $response->assertJsonStructure(['data' => $expected]);
    }
}
