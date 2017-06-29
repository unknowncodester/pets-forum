<?php

namespace Tests\Feature;

use App\Models\Topic;
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
}

