<?php

namespace App\Console\Commands;

use App\Models\Match;
use Illuminate\Console\Command;

class ImportMatches extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import-matches';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import the real premier league fixtures.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $importMatches = new \App\Library\ImportMatches();
        $importMatches->setReadLocation(__DIR__ . '/../../../tests/Fixtures/third-party-data-subset.json');
        $matches = $importMatches->parse();
        Match::insert($matches);
    }
}
