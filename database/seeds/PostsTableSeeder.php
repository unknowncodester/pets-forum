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
                [
                    "id" => 1,
                    "title" => 'Too hard to decide',
                    'body' => "So many great matches and i just cant choose, sorry",
                    'user_id' => 1,
                    'topic_id' => 1
                ],
                [
                    "id" => 2,
                    "title" => 'Brighton v Everton for me!',
                    'body' => "Brightons last minute winner to win the league, nothing can top that.",
                    'user_id' => 2,
                    'topic_id' => 1
                ],
                [
                    "id" => 3,
                    "title" => 'Brighton v Everton for me also',
                    'body' => "Have to agree with what you said.",
                    'user_id' => 3,
                    'topic_id' => 1
                ],
                [
                    "id" => 4,
                    "title" => 'Easily Aguero!',
                    'body' => "Dont even know why this is up for debate, aguero is world class.",
                    'user_id' => 3,
                    'topic_id' => 2
                ],
                [
                    "id" => 5,
                    "title" => 'Neck and neck',
                    'body' => "Yes i am a manu fan but lukaku for me is just as, if not,  better than aguero. Honestly i think Jesus is just as good as Aguero",
                    'user_id' => 2,
                    'topic_id' => 2
                ]
            ]
        );
    }
}
