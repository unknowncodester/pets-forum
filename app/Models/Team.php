<?php

namespace App\Models;

use App\Manager;
use App\Stadium;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Team extends Model
{
    protected $fillable = ['name', 'short_name', 'established'];
    protected $hidden = ['created_at', 'updated_at', 'manager_id', 'stadium_id'];

    public function homeMatches()
    {
        return $this->hasMany(Match::class, 'home_team_id', 'id');
    }

    public function awayMatches()
    {
        return $this->hasMany(Match::class, 'away_team_id', 'id');
    }

    public function manager()
    {
        return $this->hasOne(Manager::class, 'id', 'manager_id');
    }

    public function stadium()
    {
        return $this->hasOne(Stadium::class, 'id', 'stadium_id');
    }

    public static function getMatch($teamId, $matchId)
    {
        $match = DB::table('matches')
            ->join('teams as home', 'home.id', '=', 'matches.home_team_id')
            ->join('teams as away', 'away.id', '=', 'matches.away_team_id')
            ->select('home.name as home_team', 'away.name as away_team', 'matches.date')
            ->where('matches.id', $matchId)
            ->where(function ($query) use (&$teamId) {
                $query->where('home_team_id', $teamId)
                    ->orWhere('away_team_id', $teamId);
            })->get();

        return $match;
    }
}
