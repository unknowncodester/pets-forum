<?php

namespace Tests\Feature;

use Tests\TestCase;

class PostTest extends TestCase
{
    /**
     * @test
     */
    public function webServiceCanBeReached()
    {
        $response = $this->json('get', '/posts');
        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function getAllPosts()
    {
        $expected = [
            [
                "id",
                "title",
                "body",
                "user_id",
                "topic_id",
                "created_at",
                "updated_at"
            ]
        ];

        $response = $this->json('get', '/posts');
        $response->assertJsonStructure(['data' => $expected]);
    }
}

