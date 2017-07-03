<?php

namespace Tests\Unit;

use App\Library\ImportMatches;
use Tests\TestCase;

class ImportMatchesTest extends TestCase
{
    public $importMatches;

    public function setUp()
    {
        parent::setUp();
        $this->importMatches = new ImportMatches();
    }

    /**
     * @test
     */
    public function canInstantiate()
    {
        $this->assertInstanceOf(ImportMatches::class, $this->importMatches);
    }

    /**
     * @test
     */
    public function canSetAndGetReadLocation()
    {
        $this->importMatches->setReadLocation(__DIR__ . 'Fixtures/third-party-data-subset.json');

        $this->assertEquals(
            __DIR__ . 'Fixtures/third-party-data-subset.json',
            $this->importMatches->getReadLocation()
        );
    }

    /**
     * @test
     */
    public function canParseTheFirstFixture()
    {
        $expected = [
            [
                "date" => "2017-08-12 14:00:00",
                "home_team_id" => 7,
                "away_team_id" => 15,
                "home_team_goals" => null,
                "away_team_goals" => null
            ]
        ];

        $this->importMatches->setReadLocation(__DIR__ . '/../Fixtures/third-party-data-subset.json');
        $fixtures = $this->importMatches->parse();
        $this->assertEquals($expected, $fixtures);
    }
}
