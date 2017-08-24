<?php

use App\Models\Topic;
use Illuminate\Database\Seeder;

class TopicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Topic::insert(
            [
                "id" => 1,
                "name" => 'Best Matches'
            ]
        );
    }
}
