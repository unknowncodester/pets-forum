<?php

use App\Manager;
use Illuminate\Database\Seeder;

class ManagersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Manager::insert(
            [
                'name' => 'Jurgen Klopp',
                'nationality' => 'Germany'
            ]
        );
    }
}
