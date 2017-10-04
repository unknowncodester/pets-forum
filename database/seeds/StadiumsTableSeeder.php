<?php

use App\Stadium;
use Illuminate\Database\Seeder;

class StadiumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Stadium::insert([
            [
                "name" => 'Emirates Stadium',
                "capacity"=> 60432,
            ],
            [
                "name" => 'Vitality Stadium',
                "capacity"=> 11464,
            ],
            [
                "name" => 'American Express Community Stadium',
                "capacity"=> 30750,
            ],
            [
                "name" => 'Turf Moor',
                "capacity"=> 21401,
            ],
            [
                "name" => 'Stamford Bridge',
                "capacity"=> 41663,
            ],
            [
                "name" => 'Selhurst Park',
                "capacity"=> 25456,
            ],
            [
                "name" => 'Goodison Park',
                "capacity"=> 39571,
            ],
            [
                "name" => 'The John Smith\'s Stadium',
                "capacity"=> 24500,
            ],
            [
                "name" => 'King Power Stadium',
                "capacity"=> 32273,
            ],
            [
                "name" => 'Anfield',
                "capacity"=> 54074,
            ],
            [
                "name" => 'Etihad Stadium',
                "capacity"=> 55097,
            ],
            [
                "name" => 'Old Trafford',
                "capacity"=> 75653,
            ],
            [
                "name" => 'St James\' Park',
                "capacity"=> 52354,
            ],
            [
                "name" => 'St Mary\'s Stadium',
                "capacity"=> 32384,
            ],
            [
                "name" => 'bet365 Stadium',
                "capacity"=> 30187,
            ],
            [
                "name" => 'Liberty Stadium',
                "capacity"=> 21088,
            ],
            [
                "name" => 'Wembley Stadium',
                "capacity"=> 90000,
            ],
            [
                "name" => 'Vicarage Road Stadium',
                "capacity"=> 21438,
            ],
            [
                "name" => 'London Stadium',
                "capacity"=> 57000,
            ],
        ]);
    }
}
