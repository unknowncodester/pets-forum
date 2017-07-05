<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Http\Request;

class Match extends Model
{
    protected $fillable = ['home_team', 'away_team', 'home_team_goals', 'away_team_goals'];

    public static function getOne(int $id)
    {
        $match = DB::table('matches')
            ->join('teams as home', 'home.id', '=', 'matches.home_team_id')
            ->join('teams as away', 'away.id', '=', 'matches.away_team_id')
            ->select('matches.id', 'home_team_id', 'away_team_id', 'home.name as home_team', 'away.name as away_team', 'matches.date')
            ->where('matches.id', $id)
            ->get()
            ->first();

        return $match;
    }


    public static function getAll($date = null, $duration = null)
    {
        $matches = DB::table('matches')
            ->join('teams as home', 'home.id', '=', 'matches.home_team_id')
            ->join('teams as away', 'away.id', '=', 'matches.away_team_id')
            ->select('matches.id', 'home_team_id', 'away_team_id', 'home.name as home_team', 'away.name as away_team', 'matches.date', 'matches.home_team_goals', 'matches.away_team_goals');

        if($date && $duration){
            $matches->where('date', '>=', Carbon::createFromFormat('Y-m-d', $date))
                ->where('date', '<=', Carbon::createFromFormat('Y-m-d', $date)->addDays($duration));
        }

        return $matches->get();
    }
}
