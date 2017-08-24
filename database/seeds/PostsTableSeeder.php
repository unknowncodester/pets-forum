<?php

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::insert(
            [
                "id" => 1,
                "title" => 'Best Matches',
                'body' => "So many great matches..",
                'user_id' => 1,
                'topic_id' => 1
            ]
        );
    }
}
