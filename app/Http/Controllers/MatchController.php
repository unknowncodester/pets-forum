<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Match;

class MatchController extends Controller
{
    public function index(Request $request)
    {
        $date = $request->input('date');
        $timeFrame = $request->input('timeframe');

        $fixtures = Match::timeFrame($timeFrame, $date)
            ->with(['homeTeam', 'awayTeam'])
            ->get();

        return response()
            ->json(['data' => $fixtures], 200);
    }

    public function show($id)
    {
        $fixture = Match::with(['homeTeam', 'awayTeam'])->find($id);

        return response()
            ->json(['data' => $fixture], 200);
    }
}
