<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Http\Request;

class Fixture extends Model
{
    protected $fillable = ['home_team', 'away_team'];

    public static function getOne(int $id)
    {
        $fixture = DB::table('fixtures')
            ->join('teams as home', 'home.id', '=', 'fixtures.home_team_id')
            ->join('teams as away', 'away.id', '=', 'fixtures.away_team_id')
            ->select('fixtures.id', 'home.name as home_team', 'away.name as away_team', 'fixtures.date')
            ->where('fixtures.id', $id)
            ->get()
            ->first();

        return $fixture;
    }


    public static function getAll(Request $request)
    {
        $date = $request->input('date');
        $duration = $request->input('duration');

        $fixtures = DB::table('fixtures')
            ->join('teams as home', 'home.id', '=', 'fixtures.home_team_id')
            ->join('teams as away', 'away.id', '=', 'fixtures.away_team_id')
            ->select('fixtures.id', 'home.name as home_team', 'away.name as away_team', 'fixtures.date');

        if($date && $duration){
            $fixtures->where('date', '>=', Carbon::createFromFormat('Y-m-d', $date))
                ->where('date', '<=', Carbon::createFromFormat('Y-m-d', $date)->addDays($duration));
        }

        return $fixtures->get();
    }
}
