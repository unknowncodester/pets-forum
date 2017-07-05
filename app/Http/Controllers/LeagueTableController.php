<?php

namespace App\Http\Controllers;

use App\Library\LeagueTable;

class LeagueTableController extends Controller
{
    protected $leagueTable;

    public function __construct()
    {
        $this->leagueTable = new LeagueTable();
    }

    public function index()
    {
        return response()
            ->json(['data' => $this->leagueTable->getLeagueStandings()], 200);
    }
}
