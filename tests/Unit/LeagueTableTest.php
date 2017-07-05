<?php

namespace Tests\Unit;

use App\Library\LeagueTable;
use Tests\TestCase;

class LeagueTableTest extends TestCase
{
    public $leagueTable;

    public function setUp()
    {
        parent::setUp();
        $this->leagueTable = new LeagueTable();
    }

    /**
     * @test
     */
    public function canInstantiate()
    {
        $this->assertInstanceOf(LeagueTable::class, $this->leagueTable);
    }

    /**
     * @test
     */
    public function canGetLeagueStandings()
    {
        $expected = [
            (object)[
                "games" => '3',
                "name" => "Arsenal",
                "wins" => '1',
                "draws" => '1',
                "losses" => '1',
                "points" => '4',
            ],
            (object)[
                "games" => '1',
                "name"  => "Bournemouth",
                "wins"  => '1',
                "draws" => '0',
                "losses" => '0',
                "points" => '3',
            ],
            (object)[
                "games" => '1',
                "name" => "Burnley",
                "wins" => '0',
                "draws" => '1',
                "losses" => '0',
                "points" => '1',
            ],
            (object)[
                "games" => '1',
                "name" => "Brighton & Hove Albion",
                "wins" => '0',
                "draws" => '0',
                "losses" => '1',
                "points" => '0',
            ]
        ];

        $leagueStandings = $this->leagueTable->getLeagueStandings();
        $this->assertEquals($expected, $leagueStandings);
    }
}
