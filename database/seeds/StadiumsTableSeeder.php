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
        Stadium::insert(
            [
                "name" => 'Stadium Of Light',
                "capacity"=> 25600,
            ]
        );
    }
}
