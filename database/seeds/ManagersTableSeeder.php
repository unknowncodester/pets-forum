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
                [
                    'name' => 'Arsène Wenger',
                    'nationality' => 'France'
                ],
                [
                    'name' => 'Eddie Howe',
                    'nationality' => 'England'
                ],
                [
                    'name' => 'Chris Hughton',
                    'nationality' => 'Ireland'
                ],
                [
                    'name' => 'Sean Dyche',
                    'nationality' => 'England'
                ],
                [
                    'name' => 'Antonio Conte',
                    'nationality' => 'Italy'
                ],
                [
                    'name' => 'Roy Hodgson',
                    'nationality' => 'England'
                ],
                [
                    'name' => 'Ronald Koeman',
                    'nationality' => 'Netherlands'
                ],
                [
                    'name' => 'David Wagne',
                    'nationality' => 'Germany'
                ],
                [
                    'name' => 'Craig Shakespeare',
                    'nationality' => 'England'
                ],
                [
                    'name' => 'Jürgen Klopp',
                    'nationality' => 'Germany'
                ],
                [
                    'name' => 'Josep Guardiola',
                    'nationality' => 'Spain'
                ],
                [
                    'name' => 'José Mourinho',
                    'nationality' => 'Portugal'
                ],
                [
                    'name' => 'Rafa Benítez',
                    'nationality' => 'Spain'
                ],
                [
                    'name' => 'Mauricio Pellegrino',
                    'nationality' => 'Argentina'
                ],
                [
                    'name' => 'Mark Hughes',
                    'nationality' => 'Wales'
                ],
                [
                    'name' => 'Paul Clement',
                    'nationality' => 'England'
                ],
                [
                    'name' => 'Mauricio Pochettino',
                    'nationality' => 'Argentina'
                ],
                [
                    'name' => 'Marco Silva',
                    'nationality' => 'Portugal'
                ],
                [
                    'name' => 'Tony Pulis',
                    'nationality' => 'Wales'
                ],
                [
                    'name' => 'Slaven Bilić',
                    'nationality' => 'Croatia'
                ],
            ]
        );
    }
}
