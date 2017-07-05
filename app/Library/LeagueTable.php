<?php

namespace App\Library;

use Illuminate\Support\Facades\DB;

class LeagueTable
{
    public function getLeagueStandings()
    {
        return DB::table('teams')
            ->join('matches', function ($join) {
                $join->on('teams.id', '=', 'matches.home_team_id')->orOn('teams.id', '=', 'matches.away_team_id');
            })
            ->select(
                DB::raw(
                    'teams.name,
                    SUM(if(teams.id = matches.home_team_id
                        OR teams.id = matches.away_team_id,1,0)) as games,
                    SUM(if(teams.id = matches.away_team_id
                        AND matches.away_team_goals > matches.home_team_goals,1,0)) 
                    + SUM(if(teams.id = matches.home_team_id
                        AND matches.home_team_goals > matches.away_team_goals,1,0)) AS wins,
                    SUM(IF(matches.away_team_goals = matches.home_team_goals,1,0)) AS draws,
                    SUM(if(teams.id = matches.away_team_id
                        AND matches.home_team_goals > matches.away_team_goals,1,0)) 
                    + SUM(if(teams.id = matches.home_team_id
                        AND matches.away_team_goals > matches.home_team_goals,1,0)) AS losses,
                    SUM(if(teams.id = matches.away_team_id
                        AND matches.away_team_goals > matches.home_team_goals,3,0)) 
                    + SUM(if(teams.id = matches.home_team_id
                        AND matches.home_team_goals > matches.away_team_goals,3,0))
                    +
                    SUM(IF(matches.away_team_goals = matches.home_team_goals,1,0)) AS points'
                )
            )
            ->groupBy('teams.name')
            ->orderBy('points', 'desc')
            ->get()
            ->toArray();
    }
}