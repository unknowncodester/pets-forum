<?php

namespace Tests\Feature;

use App\Models\User;
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

    /**
     * @test
     */
    public function getOnePost()
    {
        $expected = [
            "title" => "Best Matches",
            "body" => "So many great matches..",
            "user_id" => 1,
            "topic_id" => 1
        ];

        $response = $this->json('get', '/posts/1');
        $response->assertJson(['data' => $expected]);
    }

    /**
     * @test
     */
    public function canCreateAPostWhenAuthenticated()
    {
        $user = User::find(1);
        $this->be($user);

        $response = $this->json(
            'POST',
            '/posts',
            [
                "title" => "My 2nd favourite match...",
                "body" => "was Blackpool vs West Ham.. dont know why",
                "user_id" => 1,
                "topic_id" => 1
            ]
        );

        $response
            ->assertStatus(201);

        $this->assertDatabaseHas('posts', [
            "title" => "My 2nd favourite match...",
            "body" => "was Blackpool vs West Ham.. dont know why",
            "user_id" => 1,
            "topic_id" => 1
        ]);
    }

    /**
     * @test
     */
    public function cannotCreateAPostWhenUnauthenticated()
    {
        $response = $this->json(
            'POST',
            '/posts'
        );

        $response
            ->assertStatus(401);
    }

    /**
     * @test
     */
    public function cannotCreateAPostForAnotherUser()
    {
        $user = User::find(1);
        $this->be($user);

        $response = $this->json(
            'POST',
            '/posts',
            [
                "title" => "My 2nd favourite match...",
                "body" => "was Blackpool vs West Ham.. dont know why",
                "user_id" => 2,
                "topic_id" => 1
            ]
        );

        $response
            ->assertStatus(403);
    }
}
